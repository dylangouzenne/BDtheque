<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bd;

class AccueilController extends Controller
{
    public function show(){

        $bd = bd::all();
        //return view('accueil', compact("accueil"));
        return view('accueil', [
            "bd" => $bd
         ]);
    }
}
