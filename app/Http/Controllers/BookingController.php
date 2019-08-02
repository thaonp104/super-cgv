<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // public function index($name, $age){
    //     echo "Xin chào $name, $age tuổi";
    // }
    
    public function index(){
        $data = [];
        return view('booking', $data);
    }
}
