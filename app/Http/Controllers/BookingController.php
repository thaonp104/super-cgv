<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use DB;
use View;

class BookingController extends Controller
{
    // public function index($name, $age){
    //     echo "Xin chào $name, $age tuổi";
    // }
    
    public function index(){
        $data = Film::where('id',1)->get();
        $session = session('login');
        if($session != 'ok'){
            return redirect('/login');
        }
        $data = DB::table('film')->where('id',2)->get();
        return view('booking', ['data' => $data] );


    }

}
