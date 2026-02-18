<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

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
    return view('web.home');
})->name('home');

Route::get('overview', function () {
    return view('web.who_we_are.overview')->with('innerHeader', true);
})->name('overview');

Route::get('our/people', function () {
    return view('web.who_we_are.team')->with('innerHeader', true);
})->name('our-people');

Route::get('our/people/{id}', function ($id) {
    return view('web.who_we_are.team-single')->with('innerHeader', true);
})->name('our-people.single');

Route::get('strategy/values', function () {
    return view('web.who_we_are.strategy-values')->with('innerHeader', true);
})->name('strategy-values');

Route::get('journey', function () {
    return view('web.who_we_are.journey')->with('innerHeader', true);
})->name('our-journey');

Route::get('contact/us', function () {
    return view('web.contact')->with('innerHeader', true);
})->name('contact');

Route::get('careers', function () {
    return view('web.career')->with('innerHeader', true);
})->name('careers');

Route::get('news/views', function () {
    return view('web.news_views.news')->with('innerHeader', true);
})->name('news.views');

// =============================================

Route::get('news/views/{id}', function ($id) {
    return view('web.news_views.news-single')->with('innerHeader', true);
})->name('news.views.single');

Route::get('gallery', function () {
    return view('web.project_gallery.gallery')->with('innerHeader', true);
})->name('gallery');

Route::get('gallery/{id}', function ($id) {
    return view('web.project_gallery.gallery-single')->with('innerHeader', true);
})->name('gallery.single');

Route::get('business/verticals', function () {
    return view('web.what_we_do.business-verticals')->with('innerHeader', true);
})->name('business-verticals');

Route::get('business/overview', function () {
    return view('web.what_we_do.business-overview')->with('innerHeader', true);
})->name('business-overview');

Route::get('operations', function () {
    return view('web.what_we_do.operations')->with('innerHeader', true);
})->name('operations');

Route::get('services/{id}', function ($id) {
    return view('web.service-single')->with('innerHeader', true);
})->name('service.single');

Route::get('sustainability', function () {
    return view('web.sustainability')->with('innerHeader', true);
})->name('sustainability');

// ================== Admin Auth & Panel ==================

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest:admin')->group(function () {
        Route::get('login', function () {
            return view('admin.auth.login');
        })->name('login');

        Route::post('login', [AuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});
