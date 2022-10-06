<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{


    public function index()
    {
        $dateOfBirth = "7-2-2005";
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        $age= $diff->format('%y');


        return view('layout.app')
            ->with('age', $age);
    }







}
