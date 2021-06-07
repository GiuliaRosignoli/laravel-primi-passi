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

// 1st route

Route::get('/', function () {
    return view('home');
});

// 2nd route

Route::get('/firstPage',function(){
    return view('firstPage');
});

// 3rd route

Route::get('/secondPage', function(){
    return view('secondPage');
});