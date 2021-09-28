<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Daycontroller extends Controller
{

    public function index()
    {
        if (date(format:'N') == 1 ){
            // is maandag;

            $maandag = 1;
        } 
         return view('date')->with(['day'=>$maandag]); //einde;
       
        



    }

}
