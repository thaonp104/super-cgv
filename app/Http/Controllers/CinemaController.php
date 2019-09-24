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
    public function allCinemas($cinema){
//        $schedule = Schedule::where('id',1)->first();
//        $st = $schedule->start_time;
//        $et = $schedule->end_time;
//        return date('h:i:s d:m:Y', $st)."-".date('h:i:s d:m:Y', $et);
//        return strtotime('19-09-2019');
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

        //thứ tự trong danh sách khớp với nhau ở từng vị trí

        $data['dates']= $dates; //danh sách các ngày theo định dang "Y-m-d"
        $data['days']= $days; //danh sách các thứ trong tuần tương ứng với các ngày
        $data['ds'] = $d; //danh sách các ngày trong tháng
        $data['ms']= $m; // dánh sách các tháng tương ứng với ngày

        //kết thúc

        $data['rooms'] = Room::where('cinema_id', $cinema)->get();
        $data['result'] = $cinema;
        $data['cinemas'] = Cinema::all();

        $room_ids = Room::where('cinema_id', $cinema)
            ->select('id')
            ->get();
        $data['schedules'] = Schedule::whereIn('room_id',$room_ids)
            ->whereBetween('start_time', [strtotime($dates[0]), strtotime($dates[6])])->get();
        $film_ids = Schedule::whereIn('room_id',$room_ids)
            ->whereBetween('start_time', [strtotime($dates[0]), strtotime($dates[6])])
            ->select('film_id')
            ->get();
        $data['films'] = Film::whereIn('id',$film_ids)->get();
//        $data['seats'] = Seat::all();
//        $data['tickets'] = Ticket::all();
//        $data['bills'] = Bill::all();

        return view('Cinemas.allCinemas',$data);
    }
}
