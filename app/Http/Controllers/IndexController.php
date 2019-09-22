<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Cinema;
use App\Client;
use DB;
use View;
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
        $day = ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'];
        $today = date('d-m-20y');
        for( $i = 0 ; $i <= 6 ; $i++ ){         //for từng ngày để tìm lịch chiếu
            if( $i == 0 ) $todayTime = strtotime($today);
            else $todayTime = strtotime('+1 day', $todayTime);
            $today = date('d-m-20y',$todayTime);           // lấy ngày tháng hôm đó
            $todayD = date('d',$todayTime);
            $todayM = date('m',$todayTime);
                // tìm lịch chiếu của ngày đó
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
                        $date = date('d',$schedulet->date);
                        if( $schedulet->film_id == $id && $date == $todayD ){     // điều kiện tìm lịch chiếu đang cần
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
            $list[$i]['d'] = $todayD;
            $list[$i]['m'] = $todayM;
            $list[$i]['day'] = $day[$i];
            $list[$i]['cinemas'] = $listCinema ;
            
        }
        //  dd($list) ;
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
