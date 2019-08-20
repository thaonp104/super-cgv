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

Route::get('/login','indexController@login');

Route::get('/logout','AuthController@logout');

Route::get('/create','indexController@create');

Route::post('/saveAccount','indexController@saveAccount');

//Route::post('/login_result','indexController@login_result');

Route::post('/login_result','AuthController@login');

Route::group(['middleware'=>'clientRoute'],function (){
    Route::get('/payment', 'PaymentController@index');
    Route::get('/booking','BookingController@index');
});
