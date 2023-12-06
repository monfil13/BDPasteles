<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\ConsultaController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
Route::resource('cakes', CakeController::class)->middleware('auth');
Route::resource('consultas', ConsultaController::class)->middleware('auth');


Route::get('/cake', [App\Http\Controllers\CakeController::class, 'index'])->name('cake.index');
Route::get('/consulta', [App\Http\Controllers\ConsultaController::class, 'index'])->name('consulta.index');
