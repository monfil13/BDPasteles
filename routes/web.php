<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PastelerController;
use App\Http\Controllers\PeditController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PingredientController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\VistillaController;


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

/* Rutas para acceder a las tabla CRUD con inicio de sesión */
Auth::routes();
Route::resource('cakes', CakeController::class)->middleware('auth');
Route::resource('pastelers', PastelerController::class)->middleware('auth');
Route::resource('clients', ClientController::class)->middleware('auth');
Route::resource('pedits', PeditController::class)->middleware('auth');
Route::resource('ingredients', IngredientController::class)->middleware('auth');
Route::resource('pingredients', PingredientController::class)->middleware('auth');
Route::resource('specials', SpecialController::class)->middleware('auth');
Route::resource('sucursals', SucursalController::class)->middleware('auth');

/* Rutas para consultas*/
Route::get('/cake/consulta', [App\Http\Controllers\CakeController::class, 'consulta'])->name('cake.consulta');
Route::get('/cake/consulta2', [App\Http\Controllers\CakeController::class, 'consulta2'])->name('cake.consulta2');
Route::get('/special/consulta3', [App\Http\Controllers\SpecialController::class, 'consulta3'])->name('special.consulta3');

/* Rutas para vistas*/
Route::get('/cake/index2', [App\Http\Controllers\CakeController::class, 'index2'])->name('cake.index2');
Route::get('/cake/vistaPastelesNombre', [App\Http\Controllers\CakeController::class, 'vistaPastelesNombre'])->name('cake.vistaPastelesNombre');
Route::get('/cake/vistaPrecioPromedio', [App\Http\Controllers\CakeController::class, 'vistaPrecioPromedio'])->name('cake.vistaPrecioPromedio');
Route::get('/pedit/vistaPedidosFecha', [App\Http\Controllers\PeditController::class, 'vistaPedidosFecha'])->name('pedit.vistaPedidosFecha');
Route::get('/pasteler/vistaPastelerosApodo', [App\Http\Controllers\PastelerController::class, 'vistaPastelerosApodo'])->name('pasteler.vistaPastelerosApodo');
Route::get('/client/vistaNumerosTeziu', [App\Http\Controllers\ClientController::class, 'vistaNumerosTeziu'])->name('client.vistaNumerosTeziu');

/* Rutas para tablas*/
Route::get('/cake', [App\Http\Controllers\CakeController::class, 'index'])->name('cake.index');
Route::get('/pasteler', [App\Http\Controllers\PastelerController::class, 'index'])->name('pasteler.index');
Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client.index');
Route::get('/pedit', [App\Http\Controllers\PeditController::class, 'index'])->name('pedit.index');
Route::get('/ingredient', [App\Http\Controllers\IngredientController::class, 'index'])->name('ingredient.index');
Route::get('/pingredient', [App\Http\Controllers\PingredientController::class, 'index'])->name('pingredient.index');
Route::get('/special', [App\Http\Controllers\SpecialController::class, 'index'])->name('special.index');
Route::get('/sucursal', [App\Http\Controllers\SucursalController::class, 'index'])->name('sucursal.index');

/* Rutas para respaldo o backup */
Route::get('/backup', 'BackupController@create')->middleware('backup');
Route::get('/backup', [BackupController::class, 'createBackup'])->name('createBackup');
