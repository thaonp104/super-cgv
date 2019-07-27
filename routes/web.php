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

Route::get('/', function () {
    return view('phimdangchieu');
});

Route::get('trangChu','indexController@index');
//Route::get('thayDoiMatKhau','UserController@thayDoiMatKhau');
//>>>>>>> f0033c22aa98278d2884772b47d5325e8f767a93
