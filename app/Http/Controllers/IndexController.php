<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use DB;
use View;
class IndexController extends Controller
{
    public function index()
    {
        // lay danh sach user
        $data['films'] = Film::where('trang_thai','0')
            ->get();
        // $data['demo'] = Demo::where('id',1)->first();
        // $data['db'] = DB::table('demo')->get();

        // dd($data['db']);
        return View::make('index', $data);
    }

    public function detailFilm($id){
        $data['film'] = Film::where('id',$id)->first();
        return View::make('detailFilm', $data);
    }

}
