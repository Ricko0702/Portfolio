<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index(){
        echo "Today is" . date("Y/m/d") . "</br>";

        return view("main");
    }
}
