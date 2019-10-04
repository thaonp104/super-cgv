<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as IlluminateRoute;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/phimdangchieu','PhimDangChieuController@index');

Route::get('/','indexController@index');

Route::get('/detailFilm/{id}','indexController@detailFilm');

Route::get('/booking/{cinema_id}/{room_id}/{schedule_id}/{film_id}/{cinema_name}/{room_name}/{seat_left}/{total_seat}/{start_time}/{end_time}','BookingController@index');

Route::get('/logout','AuthController@logout');

Route::post('/saveAccount','indexController@saveAccount');

Route::post('/login_result','indexController@login_result');

Route::post('/login_result','AuthController@login');

Route::group(['middleware'=>'clientRoute'],function (){
    Route::post('/payment', 'PaymentController@indexx');
    Route::get('/myAccount','AuthController@myAccount');
    Route::get('/transactionHistory', 'AuthController@transactionHistory');    
    Route::get('/complete', 'CompleteController@complete');   
});

Route::group(['middleware'=>'RedirectMyAccount'],function (){
    Route::get('/login','indexController@login');
    Route::get('/create','indexController@create');
});

Route::get('/allCinemas/{result}', 'CinemaController@allCinemas');

// //payment form
Route::get('/paymentform', 'PaymentController@index');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
