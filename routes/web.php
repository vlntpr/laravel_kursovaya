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
    return view('home');
})->name('home');

Route::get('/more', function () { 
    return view('fandoms-more');
})->name('more');

Route::get('/works', function () { 
    return view('works');
})->name('works');

Route::get('/search', function () { 
    return view('search');
})->name('search');
