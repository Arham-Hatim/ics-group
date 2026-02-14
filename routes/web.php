<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('overview', function () {
    return view('web.who_we_are.overview')->with('innerHeader', true);
})->name('overview');

Route::get('our/people', function () {
    return view('web.who_we_are.team')->with('innerHeader', true);
})->name('our-people');
    