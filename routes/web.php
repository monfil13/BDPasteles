<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');
Route::view('/login', 'login')->name('login')->middleware('guest');
Route::view('/dashboard', 'dashboard')->middleware('auth');

Route::post('/login', function(){
$credentials = request()->only('email', 'password');

if (Auth::attempt($credentials)){
    request()->session()->regenerate();


    return redirect ("dashboard");
}
return redirect ("login");
});