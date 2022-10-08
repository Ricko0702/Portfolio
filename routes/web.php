<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Daycontroller;
use App\Http\Controllers\Rekencontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/', \App\Http\Controllers\AgeController::class);

Route::resource('/en', \App\Http\Controllers\Age1Controller::class);
