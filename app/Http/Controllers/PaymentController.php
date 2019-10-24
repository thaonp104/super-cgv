<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use App\Bill;
use App\Ticket;
use DB;
use View;

class PaymentController extends Controller
{
    public function indexx(Request $request){
        $data = [];
        // dd($request);
        return view('payment',$data);
    }

    private $_api_context;
    private $rq = [] ;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function index()
    {
        return view('paywithpaypal');
    }

    public function payWithpaypal(Request $request)
    {
        // $this->rq = $request;
        // dd($this->rq);
            $seats = explode(', ',$request->seats);
                
                // insert Bill vừa đặt vào CSDL
            DB::insert('insert into bill (payment_date, payment_type, quantity, 
                        client_id, member_id) values (?, ?, ?, ?, ?)', 
                        [$request->paymentDate, $request->typeOfPayment, sizeof($seats),
                        $request->client_id, $request->member_id]);
            
            $p = $request->price ;
            $price = 0 ;
            for( $i = 0 ; $i < strlen($p) ; $i++ )   // đổi tổng giá vé từ string sang int
                if( $p[$i] != ',' ){
                    if( $p[$i] != '.' ) $price = $price*10 + (int)$p[$i] ;
                }
                else break ;
                
                // lấy ra bill vừa cho vào CSDL để lấy bill_id cho vào từng ticket
            $bill_id = Bill::where('payment_date', $request->paymentDate)
                            ->where('payment_type', $request->typeOfPayment)
                            ->where('quantity', sizeof($seats))
                            ->where('client_id', $request->client_id)
                            ->where('member_id', $request->member_id)->first();

                // insert từng ticket vừa đặt vào CSDL
            foreach( $seats as $seat )
                DB::insert('insert into ticket (price, seat_id, schedule_id, bill_id) 
                            values (?, ?, ?, ?)', [$price/sizeof($seats), $seat, $request->schedule_id,
                            $bill_id->id]);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        
        $item_1 = new Item();
        $item_1->setName('Vé xem phim') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(sizeof($seats))
            ->setPrice(($price/sizeof($seats))/10000); /** unit price **/
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($price/10000);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
            ->setCancelUrl(URL::to('status'));
        
            $inputFields = new InputFields();
            $inputFields->setNoShipping(1);
            $webProfile = new WebProfile();
            $webProfile->setName('test' . uniqid())->setInputFields($inputFields);
            $webProfileId = $webProfile->create($this->_api_context)->getId();
            $payment = new Payment();
            $payment->setExperienceProfileId($webProfileId); // no shipping    

        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');
            }
        }
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }
        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');
    }
    public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::to('/');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
            \Session::put('success', 'Payment success');
// dd($this->rq);
            

            return Redirect::to(URL::to('complete'));
        }
        \Session::put('error', 'Payment failed');
        return Redirect::to('/');
    }
}