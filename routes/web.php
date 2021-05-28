<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

//membership CRUD
Route::get('/membership', [HomeController::class,'listMember'])->name('membership.list');
//create
Route::get('/membership/form', [HomeController::class,'formMember'])->name('membership.form');
//post-create
Route::post('/membership', [HomeController::class,'addMember'] )->name('membership.add');
//read detail
Route::get('/membership/{membership}', [HomeController::class,'showMember'] )->name('membership.show');
//edit
Route::get('/membership/{membership}/edit', [HomeController::class,'formUpMember'] )->name('membership.edit');
//update
Route::patch('/membership', [HomeController::class,'upMember'] )->name('membership.update');
//delete
Route::delete('/membership', [HomeController::class,'delMember'] )->name('membership.delete');
//end member

//barang CRUD
Route::get('/barang', [HomeController::class,'listBarang'])->name('barang.list');
//create
Route::get('/barang/form', [HomeController::class,'formBarang'])->name('barang.form');
//post-create
Route::post('/barang', [HomeController::class,'addBarang'] )->name('barang.add');
//read detail
Route::get('/barang/{barang}', [HomeController::class,'showBarang'] )->name('barang.show');
//edit
Route::get('/barang/{barang}/edit', [HomeController::class,'formUpBarang'] )->name('barang.edit');
//update
Route::patch('/barang', [HomeController::class,'upBarang'] )->name('barang.update');
//delete
Route::delete('/barang', [HomeController::class,'delBarang'] )->name('barang.delete');
//end barang

//post CRUD
Route::get('/post', [HomeController::class,'listPost'])->name('post.list');
//create
Route::get('/post/form', [HomeController::class,'formPost'])->name('post.form');
//post-create
Route::post('/post', [HomeController::class,'addPost'] )->name('post.add');
//read detail
Route::get('/post/{post}', [HomeController::class,'showPost'] )->name('post.show');
//delete
Route::delete('/barang', [HomeController::class,'delBarang'] )->name('barang.delete');
//end post

Route::get('pemesan', function () {
    return view('layouts.pemesan');
})->name('pemesan');



