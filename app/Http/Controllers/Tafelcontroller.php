<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tafelcontroller extends Controller
{
    public function index(){

        return view('tafel');

    }


    public function store(Request $request){
        
        if ($request['Tafel']){
            echo $request['Tafel']." x 1 = ". ($request['Tafel'] * 1)." <br>";
            echo $request['Tafel']." x 2 = ". ($request['Tafel'] * 2)." <br>";
            echo $request['Tafel']." x 3 = ". ($request['Tafel'] * 3)." <br>";
            echo $request['Tafel']." x 4 = ". ($request['Tafel'] * 4)." <br>";
            echo $request['Tafel']." x 5 = ". ($request['Tafel'] * 5)." <br>";
            echo $request['Tafel']." x 6 = ". ($request['Tafel'] * 6)." <br>";
            echo $request['Tafel']." x 7 = ". ($request['Tafel'] * 7)." <br>";
            echo $request['Tafel']." x 8 = ". ($request['Tafel'] * 8)." <br>";
            echo $request['Tafel']." x 9 = ". ($request['Tafel'] * 9)." <br>";
            echo $request['Tafel']." x 10 = ". ($request['Tafel'] * 10)." <br>";
        }
    }



}
