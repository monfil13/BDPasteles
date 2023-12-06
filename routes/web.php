<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('cakes', CakeController::class)->middleware('auth');

Auth::routes();

Route::get('/cake', [App\Http\Controllers\CakeController::class, 'index'])->name('cake.index');


