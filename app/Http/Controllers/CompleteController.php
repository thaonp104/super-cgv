<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompleteController extends Controller
{
    public function complete( Request $request){
        $data = $request->all();

        dd($data);
        return view('complete',compact('data'));
    }
}
