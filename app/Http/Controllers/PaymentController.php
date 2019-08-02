<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $data = [];
        return view('payment',$data);
    }
}
