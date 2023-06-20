<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('auth:loginAdmin');
// Route::get('tampilanAdmin', function () {
//     return view('tampilanAdmin');
// })->middleware('auth:admin');

Route::get('tampilanAdmin', function () {
    return view('tampilanAdmin');
});


Route::get('login', function () {
    return view('login');
});

Route::get('loginAdmin', function () {
    return view('loginAdmin');
});

// Login Pembeli
Route::post('login/auth', [UserController::class,'auth']);
Route::get('register', [UserController::class,'daftar']);
Route::post('daftar/create', [UserController::class,'create']);
Route::get('logout', [UserController::class,'logout']);

// Login Admin
Route::post('login/auth', [UserAdminController::class,'auth']);
Route::get('registerAdmin', [UserAdminController::class,'register']);
Route::post('daftar/admin', [UserAdminController::class,'create']);
Route::get('logoutAdmin', [UserAdminController::class,'logout']);

// Produk
Route::get('produk', [ProdukController::class,'show']);
Route::get('produk/add', [ProdukController::class,'add']);
Route::post('produk/create', [ProdukController::class,'create']);
Route::get('produk/hapus/{kdproduk}', [ProdukController::class,'hapus']);
Route::get('produk/edit/{kdproduk}', [ProdukController::class,'edit']);
Route::post('produk/update/{kdproduk}', [ProdukController::class,'update']);
Route::get('produk/cari', [ProdukController::class,'cari']);

Route::get('home', [HomeController::class, 'show']);
Route::get('hmproduk', [HomeController::class, 'hmproduk']);
Route::get('hmproduk/cari', [HomeController::class, 'cari']);
Route::get('home/card/{kdproduk}', [HomeController::class, 'card']);


Route::get('dashbord', [AdminController::class, 'dashbord']);
