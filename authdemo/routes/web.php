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

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/auth2', function () {
    echo "Hello";
})->middleware('auth');

Route::get('/auth3', function () {
    if(Auth::check()){
        echo "Logged IN as ".Auth::user()->name;
    }else {
        echo "Hello Guest";
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/demo', [App\Http\Controllers\HomeController::class, 'demo']);
