<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\ClientController;
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
Route::resource('pastelers', PastelerController::class)->middleware('auth');
Route::resource('clients', ClientController::class)->middleware('auth');
Route::resource('pedits', PeditController::class)->middleware('auth');
Route::resource('ingredients', IngredientController::class)->middleware('auth');
Route::resource('pingredients', PingredientController::class)->middleware('auth');
Route::resource('specials', SpecialController::class)->middleware('auth');
Route::resource('sucursals', SucursalController::class)->middleware('auth');


Route::get('/cake', [App\Http\Controllers\CakeController::class, 'index'])->name('cake.index');
Route::get('/pasteler', [App\Http\Controllers\PastelerController::class, 'index'])->name('pasteler.index');
Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.index');
Route::get('/pedit', [App\Http\Controllers\PeditController::class, 'index'])->name('pedit.index');
Route::get('/ingredient', [App\Http\Controllers\IngredientController::class, 'index'])->name('ingredient.index');
Route::get('/pingredient', [App\Http\Controllers\PingredientController::class, 'index'])->name('pingredient.index');
Route::get('/special', [App\Http\Controllers\SpecialController::class, 'index'])->name('special.index');
Route::get('/sucursal', [App\Http\Controllers\SucursalController::class, 'index'])->name('sucursal.index');

