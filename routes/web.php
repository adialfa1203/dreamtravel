<?php

use App\Http\Controllers\AddtabController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PemilikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenggunaWebController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PesanNavController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GrafikController;

//admin travel
use App\Http\Controllers\BerandaTravelController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DetailHargaController;
use App\Http\Controllers\DetailTujuanController;
use App\Http\Controllers\PemesananTravController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\TambahDataController;

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
Route::get('/', [PenggunaWebController::class, 'indexhasilpencarian']);
Route::get('hasilpencarian',[PenggunaWebController::class,'indexhasilpencarian']);
Route::get('tentangkami', [PenggunaWebController::class, 'indextentangkami']);
Route::get('detailkendaraan', [PenggunaWebController::class, 'indexdetailkendaraan']);
Route::get('faq', [PenggunaWebController::class, 'indexfaq']);
Route::get('detailtravel', [PenggunaWebController::class, 'indexdetailtravel']);
Route::get('kontak', [PenggunaWebController::class, 'indexkontak']);
// Route::get('pesan', [PenggunaWebController::class, 'indexpesan']);
Route::get('/grafik', [GrafikController::class, 'getData']);


//login register
Route::middleware('only_guest')->group(function() {
    Route::get('login',[AuthController::class,'login'])->name('login');
    Route::post('login',[AuthController::class,'authenticate']);
    Route::get('register',[AuthController::class,'register']);
    Route::post('register',[AuthController::class,'registerProcess']);
});

Route::middleware('auth')->group(function() {
    //pemesanan
    Route::get('pemesanan', [PemesananTravController::class, 'pemesanan']);
    Route::post('pemesanan', [PemesananTravController::class, 'pemesananproses']);
    //logout
    Route::get('logout', [AuthController::class,'logout']);
    
    //faq
    Route::get('faq', [FAQController::class, 'faq'])->name('faq');
    Route::post('createfaq', [FAQController::class, 'createfaq'])->name('createfaq');
    Route::get('faqs', [FAQController::class, 'faqs']);
    // profile

    Route::get('profile', [PenggunaWebController::class, 'indexprofile'])->name('profile');
    Route::get('editprofile', [PenggunaWebController::class, 'editprofile']);
    Route::post('/update/{id}', [PenggunaWebController::class, 'update']);
    Route::post('/updateee/{id}', [PenggunaWebController::class, 'updateee']);
}); 
    Route::middleware('only_admin')->group(function(){
    //admin
        Route::get('admin', function () {
            return view('admin.beranda.index');
        })->middleware(['auth', 'only_admin']);
        Route::get('/profil', function () {
            return view('admin.profil.index');
        });
        Route::get('edit', function () {
            return view('admin.profil.edit');
        });
        Route::post('/updatee/{id}', [PenggunaWebController::class, 'updatee']);
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
        // profile
        
        
        
        //halaaman percobaan
        //test faq
        // Route::get('Komentar',[HubungiKamiController::class, 'create']);
    });
    Route::middleware('only_travel')->group(function() {
        //admin_travel
        //beranda admin_travel
        Route::get('beranda_travel',[BerandaTravelController::class,'beranda_travel']);
        //travel
        Route::post('create_data', [TambahDataController::class, 'insert_data_to_two_tables']);
        Route::get('travel',[TravelController::class,'travel']);
        Route::get('/delete_travel/{id}', [TambahDataController::class, 'delete_travel']);
        //fasilitas
        // Route::post('create_fasilitas', [TambahDataController::class, 'insert_data_to_two_tables']);
        Route::get('fasilitas',[FasilitasController::class, 'fasilitas']);
        Route::get('/delete_fasilitas/{id}', [TambahDataController::class, 'delete_fasilitas']);
        //detail_harga
        // Route::post('create_harga', [TambahDataController::class, 'insert_data_to_two_tables']);
        Route::get('detail_harga',[DetailHargaController::class, 'detail_harga']);
        Route::get('/delete_harga/{id}', [TambahDataController::class, 'delete_harga']);
        //detail_tujuan
        // Route::post('create_tujuan', [TambahDataController::class, 'insert_data_to_two_tables']);
        Route::get('detail_tujuan',[DetailTujuanController::class, 'detail_tujuan']);
        Route::get('/delete_tujuan/{id}', [TambahDataController::class, 'delete_tujuan']);
        //tambah
        Route::get('tambah',[TambahDataController::class, 'index']);
        Route::post('tambah',[TambahDataController::class, 'insert_data_to_two_tables']);
        //pesanan
        Route::get('pesanan',[PemesananTravController::class,'index']);
        Route::get('/hpus/{id}',[PemesananTravController::class,'hpus']);
        //tambah data ??
        Route::get('tambah_data', [TambahDataController::class, 'index']);
        Route::post('tambah_data', [TambahDataController::class, 'insert_data_to_two_tables']);
    });

Route::get('pembayaran', function() {
    return view('admin.pembayaran.index');
});