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
Route::get('/',[App\Http\Controllers\AutiKontroler::class,'index'])->name('welcome.index');
Route::get('/auti/{product}',[App\Http\Controllers\AutiKontroler::class,'show'])->name('kartica');


Route::get('/auti/{product}/narudzba',[App\Http\Controllers\AutiKontroler::class,'narudzba'])->name('narudzba')->middleware('auth');

Route::get('/Onama', function () {
    return view('Onama');
});

Route::get('/hvala', function () {
    return view('hvala');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('unos',[App\Http\Controllers\AutiKontroler::class,'insert'])->middleware('auth');;

