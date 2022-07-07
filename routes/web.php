<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CommentsController;
use App\Models\Article;

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
        'article' => Article::all()->random(3)
    ]);
})->name('home');
Route::resource('articles', ArticlesController::class);
Route::resource('articles.comments', CommentsController::class);
// Route::resource('articles.likes', LikesController::class);

Route::get('/impressum', function () {
    return Inertia::render('Impressum', []);
})->name('impressum');
