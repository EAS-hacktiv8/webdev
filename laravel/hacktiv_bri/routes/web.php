<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BiodataController;
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
    return view('index');
});

// Route::resource('biodata', BiodataController::class);
Route::get('home', function() {
    return view('auth.home');
});
Route::prefix('tugas')->group(function () {
    Route::get('/contacts/search', [ContactController::class, 'searchView']);
    Route::post('/contacts/searchHandler', [ContactController::class, 'search']);
    Route::resource('/contacts', ContactController::class);

    Route::get('/user', function () {
        return view('portfolio/user/index');
    });
    Route::prefix('company')->group(function () {
        Route::get('/', function () {
            return view('portfolio/company/index');
        });
        Route::get('/about', function () {
            return view('portfolio/company/about');
        });
        Route::get('/blog', function () {
            return view('portfolio/company/blog');
        });
        Route::get('/contact', function () {
            return view('portfolio/company/contact');
        });
        Route::get('/todos', function () {
            return view('portfolio/company/todos');
        });
        Route::get('/portfolio', function () {
            return view('portfolio/company/portfolio');
        });
    });
});
