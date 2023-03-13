<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PemilikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenggunaWebController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesanNavController;

//admin travel
use App\Http\Controllers\BerandaTravelController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DetailHargaController;
use App\Http\Controllers\DetailTujuanController;
use App\Http\Controllers\TambahController;

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
//halaman utama
Route::get('/', [PenggunaWebController::class, 'index']);
Route::get('hasilpencarian',[PenggunaWebController::class,'indexhasilpencarian']);
Route::get('profile', [PenggunaWebController::class, 'indexprofile']);
Route::get('tentangkami', [PenggunaWebController::class, 'indextentangkami']);
Route::get('detailkendaraan', [PenggunaWebController::class, 'indexdetailkendaraan']);
Route::get('faq', [PenggunaWebController::class, 'indexfaq']);
Route::get('detailtravel', [PenggunaWebController::class, 'indexdetailtravel']);
Route::get('kontak', [PenggunaWebController::class, 'indexkontak']);
Route::get('pesan', [PenggunaWebController::class, 'indexpesan']);

//login register
Route::middleware('only_guest')->group(function() {
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('login',[AuthController::class,'authenticate']);
    Route::get('register',[AuthController::class,'register']);
    Route::post('register',[AuthController::class,'registerProcess']);
});

Route::middleware('auth')->group(function() {
    Route::middleware('only_admin')->group(function(){
        //admin
        Route::get('admin', function () {
            return view('admin.beranda.index');
        })->middleware(['auth', 'only_admin']);
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
        //logout
        Route::get('logout', [AuthController::class,'logout']);
        //halaaman percobaan
        //test faq
        // Route::get('Komentar',[HubungiKamiController::class, 'create']);
    });
    Route::middleware('only_travel')->group(function() {
        //admin_travel
        //beranda admin_travel
        Route::get('beranda_travel',[BerandaTravelController::class,'beranda_travel']);
        //travel
        Route::get('travel',[TravelController::class,'travel']);
        //fasilitas
        Route::get('fasilitas',[FasilitasController::class, 'fasilitas']);
        //detail_harga
        Route::get('detail_harga',[DetailHargaController::class, 'detail_harga']);
        //detail_tujuan
        Route::get('detail_tujuan',[DetailTujuanController::class, 'detail_tujuan']);
        //tambah
        Route::get('tambah',[TambahController::class, 'tambah'])->name('tambah');
    });
    });

