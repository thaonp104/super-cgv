<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use DB;
use View;

class PhimDangChieuController extends Controller
{
    public function index(){
        $data['film'] = Film::all();
        return View::make('phimdangchieu', $data);
    }
    
}
