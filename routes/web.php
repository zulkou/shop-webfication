<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/homes', function () {
    return view('layouts.template');
})->middleware('auth');

Route::get('/login', function () {
    return view('home');
})->name('login');

Route::get('/', function () {
    return view('layouts.guest');
})->name('guest');

Route::get('barang', function () {
    return view('layouts.barang');
})->name('barang');

Route::get('template', function () {
    return view('layouts.template');
})->name('template');

Route::get('barangs', function () {
    return view('content.barangs');
})->name('barangs');

Route::get('membership', function () {
    return view('layouts.membership');
})->name('membership');

Route::get('pemesan', function () {
    return view('layouts.pemesan');
})->name('pemesan');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

