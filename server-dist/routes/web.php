<?php

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

Route::view('/', 'index');

Route::name('user.')->group(function() {
    Route::view('/stats', 'stats')->middleware(middleware: 'auth')->name(name: 'stats');
    Route::get('/login', function() {
        if(Auth::check()) {
            return redirect(route(name: 'user.stats'));
        }
        return view(view: 'login');
    })->name(name: 'login');

    //Route::post('/login', []);

    //Route::get('/logout', [])->name(name: 'logout');
    Route::get('/register', function() {
        if(Auth::check()) {
            return redirect(route(name: 'user.stats'));
        }
        return view(name(name: 'register'));
    })->name(name: 'register');

    //Route::post('/register', []);
});