<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rekencontroller extends Controller
{
    public function index(){

        return view('reken')
    }
    function public store(){
    if($_POST['group1'] == add) {
        echo "$first + $second";
        }
        else if($_POST['group1'] == subtract) {
        echo "$first - $second";
        }
        else if($_POST['group1'] == times) {
        echo "$first * $second";
        }
        else($_POST['group1'] == divide) {
        echo "$first / $second";
        }
    }
}

