<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Registercontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(Controller::class)->group(function () {
    Route::get('/', 'index')->name('index')->middleware('auth');
});

Route::controller(Logincontroller::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/loginaccount', 'loginaccount')->name('loginaccount')->middleware('guest');
    Route::post('/logoutaccount', 'logoutaccount')->name('logoutaccount')->middleware('auth');
});

Route::controller(Registercontroller::class)->group(function () {
    Route::get('/register', 'register')->name('register')->middleware('guest');
    Route::post('/registeraccount', 'registeraccount')->name('registeraccount')->middleware('guest');
});
