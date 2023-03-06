<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PemilikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesanNavController;

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

Route::get('/', function () {
    return view('admin.beranda.index');
});


Route::get('pengguna', function () {
    return view('admin.pengguna.index');
});
Route::get('pemilik', function () {
    return view('admin.pemiliktravel.index');
});

Route::get('profil', function () {
    return view('admin.profil.index');
});
Route::get('edit', function () {
    return view('admin.profil.edit');
});
Route::get('pesan', function () {
    return view('admin.pesan-navbar.index');
});
Route::get('semuapesan', function () {
    return view('admin.pesan-navbar.semuapesan');
});
Route::get('semuanotif', function () {
    return view('admin.notifikasi.semuanotifikasi');
});
Route::get('notif', function () {
    return view('admin.notifikasi.index');
});

Route::get('pemilik',[PemilikController::class,'index']);
Route::get('pengguna',[PenggunaController::class,'index']);
Route::get('/detail/{id}',[DetailController::class,'index']); //detailcontroller
Route::get('pesanan',[PesananController::class,'index']);
Route::get('pesannav',[PesanNavController::class,'index']);
Route::get('/deletpesan/{id}',[PesanNavController::class,'deletpesan']);
Route::get('/deletepemilik/{id}',[PemilikController::class,'deletepemilik']);
Route::get('/dataa/{id}',[DetailController::class,'dataa'])->name('dataa');
Route::get('semuanotif',[NotifikasiController::class,'index']);
Route::get('/deletnotif/{id}',[NotifikasiController::class,'deletnotif']);

Route::get('/delete/{id}',[PenggunaController::class,'delete'])->name('delete');
Route::get('/destroy/{id}',[PenggunaController::class,'destroy'])->name('destroy');
Route::get('/hps/{id}',[PesananController::class,'hps'])->name('hps');