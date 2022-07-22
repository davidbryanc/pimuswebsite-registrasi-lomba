<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('index');

// Route tipe get yang digunakan saat mengakses halaman
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/registration/cabang/register', function () {return view('registerlomba');});
    Route::get('/admin', function () {return view('admin');})->name('admin');
});

Route::get('/aboutus', function () {return view('aboutus');});
Route::get('/registration', function () {return view('registration');});
Route::get('/registration/cabang', function () {return view("cabang");});
Route::get('/submission', function () {return view('submission');});
Route::get('/exhibition', function () {return view('exhibition');});
Route::get('/comingsoon', function () {return view('comingsoon');});

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/verify','Auth\RegisterController@verifyUser')->name('verify.user');