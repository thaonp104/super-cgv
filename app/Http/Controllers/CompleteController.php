<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Ticket;
use DB;
use View;
use Illuminate\Support\Facades\Hash;

class CompleteController extends Controller
{
    public function complete( Request $request){
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

        // dd($request->all());
        
        return view('complete',compact('seats'));
    }
}
