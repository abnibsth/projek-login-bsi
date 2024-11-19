<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BerandaController;
use Symfony\Component\Mailer\Transport\Dsn;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LatihandController;
use App\Http\Controllers\HelloWorldController;

Route::get('/', function () {
    return view('welcome');
    // Route::get('/', function () {
    //     return redirect()->route('backend.login');
    // });
});
Route::resource('anggota', AnggotaController::class);
Route::get('helloworld', [HelloWorldController::class, 'index']);
Route::get('getTabel', [LatihandController::class, 'getTabel']);
Route::get('getFrom', [LatihandController::class, 'getFrom']);

Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda')->middleware('auth');
Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login-old');
Route::get('backend/login', [LoginController::class, 'loginBackend'])->name('backend.login-old');
Route::post('backend/login', [LoginController::class, 'authenticateBackend'])->name('backend.login');
Route::post('backend/logout', [LoginController::class, 'logoutBackend'])->name('backend.logout');


Route::resource('backend/user', UserController::class, ['as' => 'backend'])->middleware('auth'); 
Route::resource('backend/kategori', KategoriController::class,  ['as' => 'backend'])->middleware('auth'); 
Route::resource('backend/produk', ProdukController::class, ['as' => 'backend'])->middleware('auth'); 
// Route untuk menambahkan foto 
Route::post('foto-produk/store', [ProdukController::class, 'storeFoto'])->name('backend.foto_produk.store')->middleware('auth'); 
// Route untuk menghapus foto 
Route::delete('foto-produk/{id}', [ProdukController::class, 'destroyFoto'])->name('backend.foto_produk.destroy')->middleware('auth');
// laporam user
Route::get('backend/laporan/formuser', [UserController::class, 'formUser'])->name('backend.laporan.formuser')->middleware('auth'); 
Route::post('backend/laporan/cetakuser', [UserController::class, 'cetakUser'])->name('backend.laporan.cetakuser')->middleware('auth'); 
// from produk
Route::get('backend/laporan/formproduk', [ProdukController::class, 'formProduk'])->name('backend.laporan.formproduk')->middleware('auth'); 
Route::post('backend/laporan/cetakproduk', [ProdukController::class, 'cetakProduk'])->name('backend.laporan.cetakproduk')->middleware('auth'); 