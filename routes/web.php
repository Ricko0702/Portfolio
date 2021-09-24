<?php


use Illuminate\Support\Facades\Route;

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

Route::get('/date', [\App\Http\Controllers\Daycontroller::class,'date']);
