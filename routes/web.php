<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BusinessCommunityController;
use App\Http\Controllers\NewsroomController;
use App\Http\Controllers\CareersController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/newsroom', [NewsroomController::class, 'index'])->name('newsroom');
Route::get('/careers', [CareersController::class, 'index'])->name('careers');

// Who we are
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/who-we-are/strategy-values', [AboutController::class, 'strategy'])->name('about.strategy');
Route::get('/who-we-are/people', [AboutController::class, 'people'])->name('about.people');
Route::get('/who-we-are/journey', [AboutController::class, 'journey'])->name('about.journey');

// What we do
Route::get('/business-community', [BusinessCommunityController::class, 'index'])->name('business-community');
Route::get('/what-we-do/verticals', [BusinessCommunityController::class, 'verticals'])->name('business.verticals');
Route::get('/what-we-do/operations', [BusinessCommunityController::class, 'operations'])->name('business.operations');

// Sustainability
Route::get('/sustainability', function () {
    return view('sustainability');
})->name('sustainability');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
