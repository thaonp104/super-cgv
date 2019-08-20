<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                return redirect(url('/phimdangchieu'));
            else
                return redirect(url('/login'));

        }
    }
    public function logout(){
        Auth::logout();
        return redirect(url('/login'));
    }
}
