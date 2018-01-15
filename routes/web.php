<?php

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
})->name('home');

Route::view("/login", "login")->name('login');
Route::post("/login/confirm", 'LoginController@authenticate')->name('login_confirm');
Route::view("/register", "register")->name('register');
Route::view("/logout", function() {
    // logout
    return redirect()->route('home');
})->name('logout');
