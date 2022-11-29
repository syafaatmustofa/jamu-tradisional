<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RekomenjamuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BerandaController::class, 'index']);
Route::resource('beranda', BerandaController::class);
// Route::get('detail', 'PostController@show')->name('detail');

Route::resource('jamu', RekomenjamuController::class);
// Route::view('rekomenjamu', 'rekomenjamu.index');
//Route Auth 
Auth::routes();

// middleware
Route::middleware(['auth', 'admin'])->group(function () {
    
    // route user
    Route::resource('datauser', UserController::class);
    Route::get('deleteuser/{user}', [UserController::class, 'destroy'])->name('deleteuser');
});

// middleware
Route::middleware(['auth', 'editor'])->group(function () {
    
    // Route Kategori
    Route::resource('kategori', KategoriController::class);
    Route::get('deletekategori/{kategori}', [KategoriController::class, 'destroy'])->name('deletekategori');
    
    // RouteProduk
    Route::resource('produk', ProdukController::class);
    Route::get('deleteproduk/{produk}', [ProdukController::class, 'destroy'])->name('deleteproduk');
    
    // route post
    Route::resource('post', PostController::class);
    Route::get('deletepost/{post}', [PostController::class, 'destroy'])->name('deletepost');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

