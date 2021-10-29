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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/overmij', function () {
    return view('pages.overmij');
});

Route::get('/projecten', function () {
    return view('pages.projecten');
});

Route::get('/dezewebsite', function () {
    return view('pages.dezewebsite');
});

Route::get('/projecten/deze-website', function () {
    return view('pages.dezewebsite');
});

Route::get('/row', [\App\Http\Controllers\RowController::class,'rowItems']);

Route::get('/date', [\App\Http\Controllers\DayController::class,'day']);

Route::get('/en/home', function () {
    return view('pages en.home');
});

Route::get('/en/projects', function () {
    return view('pages en.projects');
});

Route::get('/en/about', function () {
    return view('pages en.about');
});

Route::get('/en/projects/this-website', function () {
    return view('pages en.thiswebsite');
});

Route::get('/form', [\App\Http\Controllers\Formcontroller::class,'index']);
Route::post('/form', [\App\Http\Controllers\Formcontroller::class,'store']);


Route::get('/reken', [Rekencontroller::class,'index']);


Route::get('/tafel', [\App\Http\Controllers\Tafelcontroller::class,'index']);
Route::post('/tafel', [\App\Http\Controllers\Tafelcontroller::class,'store']);

Route::get('/btw', [\App\Http\Controllers\BTWcontroller::class,'index']);
Route::post('/btw', [\App\Http\Controllers\BTWcontroller::class,'store']);


Route::get('/reken', [\App\Http\Controllers\Rekencontroller::class,'index']);
Route::post('/reken', [\App\Http\Controllers\Rekencontroller::class,'store']);
