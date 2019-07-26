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

Route::get('model/select-all',function(){
    $data = App\Film::all()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});

// Route::get('model/select-id',function(){
//     $data = App\Film::find(24)->toArray();
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";
// });

// Route::get('db',function(){
//     $data = DB::table('ticket','film','schedule')
//     ->select(DB::raw('ticket.id as idTicket, schedule.film_id as idFilm'))
//     ->where('ticket.schedule_id','schedule.id');
//     echo ($data);
// });