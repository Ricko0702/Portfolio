<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rekencontroller extends Controller
{
    public function index(){

        $total= [2,5,10,20,120];

        $aantal= count($total);

        echo $aantal;
        
    }


}
