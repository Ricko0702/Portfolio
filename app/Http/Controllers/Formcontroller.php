<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    //
    public function index(){
        //show form blade to input data
        return view('form');
    }

    public function store(Request $request){

        if($request['voornaam'] === 'Rick'){
            echo "Hoi Rick";
    }else{
        echo"Rot op";
        }
    }
}