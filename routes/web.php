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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/matches', function () {
    return view('dashboard.matches');
})->name('matches');

Route::get('/feedback', function () {
    return view('dashboard.feedback');
})->name('feedback');
Route::get('/rankings', function () {
    return view('dashboard.rankings');
})->name('rankings');


Route::get('/orders', function () {
    return view('dashboard.orders');
})->name('orders');

Route::get('/profile', function () {
    return view('dashboard.profile');
})->name('profile');

Route::get('/shop', function () {
    return view('dashboard.shop');
})->name('shop');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/', function () {
    return view('home.index');
});
