<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use DB;
use Illuminate\Support\Facades\Auth;
use View;

class BookingController extends Controller
{
    // public function index($name, $age){
    //     echo "Xin chào $name, $age tuổi";
    // }
    
    public function index(){
        $data = DB::table('film')->where('id',2)->get();
        return view('booking', ['data' => $data] );
    }

}
