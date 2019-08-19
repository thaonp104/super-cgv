<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Cinema;
use DB;
use View;

class IndexController extends Controller
{
    public function index()
    {
        // lay danh sach user
        $data['films'] = Film::where('trang_thai','0')
            ->get();
        // $data['demo'] = Demo::where('id',1)->first();
        // $data['db'] = DB::table('demo')->get();

        // dd($data['db']);
        return View::make('index', $data);
    }

    public function detailFilm($id){
        // $data['film'] = Film::where('id',$id)->first();

        // // Các phòng chiếu phim đã chọn
        // $room = App\Film::find($id)->room()->get()->toArray();
        
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


        // return View::make('detailFilm', $data);

        // $listFilm = [];
       
        // $data1 = Film::find($id)->schedule()->get();
        // foreach ($data1 as $i) {
        //     $listRoom = [];
        //     $rooms = $i->room()->get();
        //     foreach ($rooms as $j) {
        //         array_push($listRoom, $j);
        //         $listCinema = [];
        //         $cinemas = $j->cinema()->get();
        //         foreach ($cinemas as $x) {
        //             array_push($listCinema, $x);
        //         }
        //         $j['cinemas'] = $listCinema;
        //         array_push($listRoom, $j);
        //     }
        //     $i['rooms'] = $listRoom;
        //     array_push($listFilm, $i);
        // }

        $listCinema = [];
        $cinema = Cinema::all();
        foreach( $cinema as $cinemai ){
            $listRoom = [];
            $roomi = $cinemai->room()->get();
            foreach( $roomi as $roomj ){
                $listSchedule = [];
                $schedulej = $roomj->schedule()->get();
                foreach( $schedulej as $schedulet ){
                    if( $schedulet->film_id == $id ){
                        $schedulet['film'] = $schedulet->film()->get();
                        array_push($listSchedule,$schedulet);
                    }
                }
                $roomj['schedules'] = $listSchedule;
                if( sizeof($listSchedule) > 0 ) array_push($listRoom,$roomj);
            }
            $cinemai['rooms'] = $listRoom;
            if( sizeof($listRoom) > 0 ) array_push($listCinema,$cinemai);
        }
        // dd($listCinema) ;
        
        return view('detailFilm')->with('listCinema',$listCinema);
    }


    public function cinema($id)
    {
        // $listFilm = [];
       
        // $data1 = Film::find(1)->schedule()->get();
        // foreach ($data1 as $i) {
        //     $listRoom = [];
        //     $rooms = $i->room()->get();
        //     foreach ($rooms as $j) {
        //         array_push($listRoom, $j);
        //         $listCinema = [];
        //         $cinemas = $j->cinema()->get();
        //         foreach ($cinemas as $x) {
        //             array_push($listCinema, $x);
        //         }
        //         $j['cinemas'] = $listCinema;
        //         array_push($listRoom, $j);
        //     }
        //     $i['rooms'] = $listRoom;
        //     array_push($listFilm, $i);
        // }
        
        // dd($listFilm);
        // return view('detailFilm')->with('listFilm',$listFilm);
    }
}
