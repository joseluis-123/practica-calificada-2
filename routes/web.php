<?php

use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::middleware('auth')->group( function () {
    Route::get('dashboard', [ ProductController::class, 'index'])->name('dashboard');

    Route::get('producto', [ProductController::class, 'create'])->name('producto.create');
    Route::post('producto', [ProductController::class, 'store'])->name('producto.store');
    
});

require __DIR__.'/auth.php';
