<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Cinema;
use App\Client;
use DB;
use View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        // lay danh sach user
        $data['films'] = Film::where('trang_thai','0')
            ->get();
        return View::make('index', $data);
    }

    public function detailFilm($id){
        $list = [];
        
        for( $i = 0 ; $i <= 6 ; $i++ ){
            $dt = Carbon::now();
            $t = $dt->addDay($i);
            $d = $t->day;
            $m = $t->month;
            $y = $t->year;
            if( $t->dayOfWeek == 0 ) $day = "Sun";
            if( $t->dayOfWeek == 1 ) $day = "Mon";
            if( $t->dayOfWeek == 2 ) $day = "Tue";
            if( $t->dayOfWeek == 3 ) $day = "Wed";
            if( $t->dayOfWeek == 4 ) $day = "Thu";
            if( $t->dayOfWeek == 5 ) $day = "Fri";
            if( $t->dayOfWeek == 6 ) $day = "Sat";

            $listCinema = [];
            $film = Film::where('id',$id)->get();

            $cinema = Cinema::all();                            // lấy tất cả các rạp
            foreach( $cinema as $cinemai ){     // với mỗi rạp
                $listRoom = [];
                $roomi = $cinemai->room()->get();               // lấy tất cả các phòng
                foreach( $roomi as $roomj ){    // với mỗi phòng
                    $listSchedule = [];
                    $schedulej = $roomj->schedule()->get();             // lấy tất cả các lịch chiếu
                    foreach( $schedulej as $schedulet ){        // với mỗi lịch chiếu
                        $date = date('d',$schedulet->start_time);
                        if( $schedulet->film_id == $id && $date == $d ){     // điều kiện tìm lịch chiếu đang cần
                            $seat_taken = $schedulet->ticket()->count('Ticket.id');
                            $schedulet['seat_left'] = $roomj->total_seat - $seat_taken ;
                            array_push($listSchedule,$schedulet);           
                        }
                    }
                    $roomj['schedules'] = $listSchedule;
                    if( sizeof($listSchedule) > 0 ) array_push($listRoom,$roomj);
                }
                $cinemai['rooms'] = $listRoom;
                if( sizeof($listRoom) > 0 ) array_push($listCinema,$cinemai);
            }
            $list[$i]['d'] = $d;
            $list[$i]['m'] = $m;
            $list[$i]['day'] = $day;
            $list[$i]['cinemas'] = $listCinema ;
        }

        return view('detailFilm', ['film' => $film, 'list' => $list]);
    }
    
    public function login(){
        return View::make('login');
    }

    public function create(){
        $data['cinemas']= Cinema::all();
        return View::make('create',$data);
    }

    public function saveAccount(){
        if($_POST['password'] == $_POST['re-password'] && $_POST['re-text']== 'Y35NVL'){
            DB::table('client')->insert(
                [
                    'name' => $_POST['first'].$_POST['last-name'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                    'password' => bcrypt($_POST['password']),
                    'address' => $_POST['address'],
                ]
            );
            return redirect(url('/login'));
        }
        else return redirect(url('/create'));
    }
}
