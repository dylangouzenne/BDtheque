<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function show(){
        
        $bd = bd::all();
        return view('test');

    }
}
