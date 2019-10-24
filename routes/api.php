<?php
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('create-payment', 'PaymentController@createPayment');
// Route::post('execute-payment', 'PaymentController@executePayment');

// http://localhost:8000/api/hello-world
Route::get('/hello-world', function(Request $request){
    return response()->json('Hello World! Welcome to codingpearls.com', 200);
});

Route::get('/hello/{name}', function(Request $request, $name){
        return response()->json("Hello $name", 200);
    }
);

Route::get('/books', function(Request $request){
    $entries = [
        [
            "isbn" => "9781593275846",
            "title" => "Eloquent JavaScript, Second Edition",
            "author" => "Marijn Haverbeke"      
        ],
        [
            "isbn" => "9781449331818",
            "title" => "Learning JavaScript Design Patterns",
            "author" => "Addy Osmani"
        ],
        [
            "isbn" => "9781449365035",
            "title" => "Speaking JavaScript",
            "author" => "Axel Rauschmayer",
        ],
        [
            "isbn" => "9781491950296",
            "title" => "Programming JavaScript Applications",
            "author" => "Eric Elliott"
        ]
    ];
    return response()->json($entries, 200);
});