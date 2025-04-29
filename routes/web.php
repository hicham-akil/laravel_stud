<?php

use App\Http\Controllers\ControllerAuthentification;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/index',[ControllerAuthentification::class,'index'])->name('login');
Route::get('/index2',[ControllerAuthentification::class,'index2']);
Route::post('/Signin',[ControllerAuthentification::class,'Signin'])->name('Signin');
Route::post('/Signup',[ControllerAuthentification::class,'Signup'])->name('Signup');
Route::post('/logout', [ControllerAuthentification::class, 'logout'])->name('logout');
