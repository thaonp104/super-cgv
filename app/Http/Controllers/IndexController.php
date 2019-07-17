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
        $data['films'] = Film::all();
        // $data['demo'] = Demo::where('id',1)->first();
        // $data['db'] = DB::table('demo')->get();

        // dd($data['db']);
        return View::make('index', $data);
    }

}
