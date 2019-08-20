<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Film;
use App\Cinema;
use App\Client;
use DB;
use View;
use Illuminate\Support\Facades\Hash;
class IndexController extends Controller
{
    public function index()
    {
        // lay danh sach user
        $data['films'] = Film::where('trang_thai','0')
            ->get();
        return View::make('index', $data);
    }

    public function detailFilm($id){
        $data['film'] = Film::where('id',$id)->first();
//        $film->save();
        return View::make('detailFilm', $data);
    }

    public function login(){
        return View::make('login');
    }

    public function create(){
        $data['cinemas']= Cinema::all();
        return View::make('create',$data);
    }

    public function saveAccount(){
        if($_POST['password'] == $_POST['re-password'] && $_POST['re-text']== 'Y35NVL'){
            DB::table('client')->insert(
                [
                    'name' => $_POST['first'].$_POST['last-name'],
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                    'password' => bcrypt($_POST['password']),
                    'address' => $_POST['address'],
                ]
            );
            return redirect(url('/login'));
        }
        else return redirect(url('/create'));
    }
}
