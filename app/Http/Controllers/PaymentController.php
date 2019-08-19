<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $session = session('login');
        if($session != 'ok'){
            return redirect('/login');
        }
        $data = [];
        return view('payment',$data);
    }
}
