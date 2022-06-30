<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/newarticle', function () {
    return Inertia::render('NewArticle', []);
});
Route::get('/impressum', function () {
    return Inertia::render('Impressum', []);
});
Route::get('/articleslisting', function () {
    return Inertia::render('ArticlesListing', []);
});
Route::get('/articledetails', function () {
    return Inertia::render('ArticleDetails', []);
});
Route::get('/termsofservice', function () {
    return Inertia::render('TermsOfService', []);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
