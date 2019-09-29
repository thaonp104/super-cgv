<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Cinema;
use DB;
use View;
use Carbon\Carbon;

class PhimDangChieuController extends Controller
{
    public function index(){
        $film = Film::all();

        $allSchedule = [];
        foreach( $film as $f ){             // lấy lịch chiếu tất cả các phim
            $list = [];
            if( $f->trang_thai == '0' ){
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
                    $cinema = Cinema::all();                            // lấy tất cả các rạp
                    foreach( $cinema as $cinemai ){     // với mỗi rạp
                        $listRoom = [];
                        $roomi = $cinemai->room()->get();               // lấy tất cả các phòng
                        foreach( $roomi as $roomj ){    // với mỗi phòng
                            $listSchedule = [];
                            $schedulej = $roomj->schedule()->get();             // lấy tất cả các lịch chiếu
                            foreach( $schedulej as $schedulet ){        // với mỗi lịch chiếu
                                $date = date('d',$schedulet->start_time);
                                if( $schedulet->film_id == $f->id && $date == $d ){     // điều kiện tìm lịch chiếu đang cần
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
            }
            array_push($allSchedule,$list);
        }

        // dd($allSchedule);
        return view('phimdangchieu', ['film' => $film, 'allSchedule' => $allSchedule]);
    }
    
}
