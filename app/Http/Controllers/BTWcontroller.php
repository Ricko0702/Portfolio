<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BTWcontroller extends Controller
{
    public function index(){

        return view('btw');
    }

    public function store(Request $request){
        if ($request['bedrag']){
            echo $request['bedrag']. " euro exclusief 21% BTW = €". ($request['bedrag'] / 100 * 79)." <br>";
        }


        }

}
