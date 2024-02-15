<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    return redirect('/login');
});

// Case when user is not admin. Handled by custom middleware
Route::get('/restricted', function () {
    return view('restricted');
});
Route::get('home', function () {
    return redirect('/admin');
});

Route::group(['middleware' => ['auth.admin'], 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('category', CategoryController::class) ;
    Route::resource('product', ProductController::class);
    Route::resource('order', OrderController::class);
    Route::get('invoice', [OrderController::class, 'invoice'])->name('order.invoice');
});
