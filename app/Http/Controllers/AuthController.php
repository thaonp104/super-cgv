<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Bill;
use App\Ticket;
use App\Room;
use App\Schedule;
use App\Seat;
use App\Cinema;
use App\Film;
use View;
use DB;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        if($request['re-text']!= 'Y35NVL'){
            return redirect(url('/login'));
        }
        else{
            $email = $request['email'];
            $password = $request['password'];
            if(Auth::attempt(['email'=>$email, 'password'=>$password]))
//                return Auth::user()->email;
                return redirect(url('/myAccount'));
            else
                return redirect(url('/login'));

        }
    }
    public function logout(){
        Auth::logout();
        return redirect(url('/login'));
    }
    public function myAccount(){
        $data['bills'] = Bill::where('client_id',\auth()->user()->id)->get();
        $data['tickets'] = Ticket::all();
        return view('MyAccount.myAccount', $data);
    }
    public  function transactionHistory(){
        $data['bills'] = Bill::where('client_id',\auth()->user()->id)->orderBy('id','desc')->paginate(5);
        $data['tickets'] = Ticket::all();
        $data['seats'] = Seat::all();
        $data['schedules'] = Schedule::all();
        $data['rooms'] = Room::all();
        $data['films'] = Film::all();
        $data['cinemas'] = Cinema::all();
        return View('MyAccount.transactionHistory',$data);
    }
}
