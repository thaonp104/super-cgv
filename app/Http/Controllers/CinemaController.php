<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;
use App\Cinema;
use App\Film;
use App\Schedule;
use App\Seat;
use App\Ticket;
use App\Bill;
use App\Room;
use Carbon\Carbon;

class CinemaController extends Controller
{
    // trả về danh sách id của các room của rạp có id là $cinema
    public function arr_room_id($cinema){
        $arr_room_id = Room::where('cinema_id', $cinema)
            ->select('id')
            ->get();
        return $arr_room_id;
    }

    // trả về danh sách các room của rạp có id là $cinema
    public function arr_room($cinema){
        $arr_room = Room::where('cinema_id', $cinema)->get();
        return $arr_room;
    }

    // trả về ds các schedule của các arr_room của 1 ngày
    public function arr_schedule($arr_room_id, $date1, $date2, $film_id){
        $arr_schedule = Schedule::whereIn('room_id',$arr_room_id)
            ->where('film_id', $film_id)
            ->whereBetween('start_time', [strtotime($date1), strtotime($date2)-1])->get();
        foreach($arr_schedule as $schedule){
            $schedule->start_time = date("h:i", $schedule->start_time);
        }
        return $arr_schedule;
    }

    // trả về ds id của film có trong ds schedule
    public function arr_film_id($arr_room_id, $date1, $date2){
        $arr_film_id = Schedule::whereIn('room_id',$arr_room_id)
            ->whereBetween('start_time', [strtotime($date1), strtotime($date2)-1])
            ->select('film_id')
            ->get();
        return $arr_film_id;
    }

    // trả về ds film có trong ds schedule
    public function arr_film($arr_film_id){
        $arr_film = Film::whereIn('id',$arr_film_id)->get();
        return $arr_film;
    }

    // Hàm xử lí chính
    public function allCinemas($cinema){
//        return date("h:i:s", 1569714461);
        $dates = []; $i=0;
        $days = [];
        $d = [];
        $m = [];
        for( $j=0; $j<=6; $j++){
            $dt = Carbon::now()->addDay($j); // ngày hiện tại cộng thêm j ngày
            $dates [$i]= $dt->toDateString();
            $day = $dt->dayOfWeek; // lấy thứ trong tuần của ngày đang xử lí
            $d[$i]= $dt->day; // lấy ngày trong tháng của ngày đang xử lí
            $m[$i]= $dt->month; // lấy tháng của ngày đang xử lí

            // gán tên thứ cho các ngày
            if($day == 1) $days[$i]= 'Mon';
            else if($day == 2) $days[$i]= 'Tue';
            else if($day == 3) $days[$i]= 'Wed';
            else if($day == 4) $days[$i]= 'Thu';
            else if($day == 5) $days[$i]= 'Fri';
            else if($day == 6) $days[$i]= 'Sat';
            else if($day == 0) $days[$i]= 'Sun';
            $i++;
        }
        $dt = Carbon::now()->addDay(7);
        $dates[7] = $dt->toDateString();
        //thứ tự trong danh sách khớp với nhau ở từng vị trí



        //kết thúc

        $data['rooms'] = $this->arr_room($cinema);
        $data['result'] = $cinema;
        $data['cinemas'] = Cinema::all();
        for($i=0; $i<=6; $i++){
            $films = $this->arr_film($this->arr_film_id($this->arr_room_id($cinema),$dates[$i], $dates[$i+1]));
            foreach ($films as $film){
//                dd($film);
                $schedules = $this->arr_schedule($this->arr_room_id($cinema),$dates[$i], $dates[$i+1], $film->id);
                $film["schedules"] = $schedules;
            }
//            dd($films);
            $arr_date[$i] = $films;
//            dd($arr_date[$i]);
        }
        $data['dates']= $dates; //danh sách các ngày theo định dang "Y-m-d"
        $data['days']= $days; //danh sách các thứ trong tuần tương ứng với các ngày
        $data['ds'] = $d; //danh sách các ngày trong tháng
        $data['ms']= $m; // dánh sách các tháng tương ứng với ngày
        $data['arr_date'] = $arr_date;

        return view('Cinemas.allCinemas',$data);
    }
}
