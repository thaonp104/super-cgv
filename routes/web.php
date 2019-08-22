<?php

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

Route::get('/booking','BookingController@index');

Route::get('/payment', 'PaymentController@index');

Route::get('/phimdangchieu','PhimDangChieuController@index');

Route::get('/','indexController@index');

Route::get('/detailFilm/{id}','indexController@detailFilm');

Route::get('/login','indexController@login');

Route::get('/create','indexController@create');

Route::post('/saveAccount','indexController@saveAccount');

Route::post('/login_result','indexController@login_result');

Route::get('/a', function () {
    $data = App\Schedule::select('date')->get();

    $time = [];
    foreach( $data as $d ){
        $t = strtotime($d->date);
        array_push($time,$t);
    }

    // $timestamp = strtotime('12-05-2016');  
    // echo $timestamp."<br>";

    for( $i = 0 ; $i < sizeof($time) ; $i++ ){
        DB::table('schedule')->update(['date' => $time[$i]]);
    }

    $data2 = App\Schedule::select('date')->get()->toArray();

    echo "<pre>";
    print_r($data2);
    echo "<pre>";
});

