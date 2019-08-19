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
Route::get('/cinemaa','indexController@cinema');

Route::get('/cinema', function () {
    
    // Các phòng chiếu phim đã chọn
    // $room = App\Film::find(2)->room()->get()->toArray();
    
    // // Thời gian chiếu phim đã chọn
    // $time = [];
    // $j = 0;
    // foreach ($room as $each_room) {
    //     $time[$j++] = App\Film::find($each_room['id'])->schedule()->get()->toArray();
    // }

    // // Các rạp chiếu phim đã chọn
    // $cinema = [];
    // $i = 0;
    // foreach ($room as $each_room) {
    //     $cinema[$i++] = App\Room::find($each_room['id'])->cinema()->get()->toArray();
    // }

    echo "<pre>";
    print_r($time);
    echo "</pre><br><br>";
    echo "<pre>";
    print_r($room);
    echo "</pre><br><br>";
    echo "<pre>";
    print_r($cinema);
    echo "</pre>";
});
