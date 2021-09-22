<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RowController extends Controller
{
    //een functie die aan een view mee geeft hoeveel items in een rij;

    public function rowItems(){
        $count = 12;

        return view('row')->with(['rows'=>$count]); // einde van mijn functie;
    }
}
