<?php

use App\Dusun;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\AnggaranRealisasiController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PemerintahanDesaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\CetakSuratController;
use App\Http\Controllers\IsiSuratController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\PetaController;

use Illuminate\Support\Str;

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

// Rute Publik
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/peta', [App\Http\Controllers\PetaController::class, 'index'])->name('peta.index');
Route::get('/laporan-apbdes', [App\Http\Controllers\AnggaranRealisasiController::class, 'laporan_apbdes'])->name('laporan-apbdes');
Route::get('/layanan-surat', [App\Http\Controllers\SuratController::class, 'layanan_surat'])->name('layanan-surat');
Route::get('/pemerintahan-desa', [App\Http\Controllers\PemerintahanDesaController::class, 'pemerintahan_desa'])->name('pemerintahan-desa');
Route::get('/pemerintahan-desa/{pemerintahan_desa}/{slug}', [App\Http\Controllers\PemerintahanDesaController::class, 'show'])->name('pemerintahan-desa.show');
Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'berita'])->name('berita');
Route::get('/berita/{berita}/{slug}', [App\Http\Controllers\BeritaController::class, 'show'])->name('berita.show');
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'gallery'])->name('gallery');
Route::get('/buat-surat/{id}/{slug}', [App\Http\Controllers\CetakSuratController::class, 'create'])->name('buat-surat');
Route::get('/panduan', [App\Http\Controllers\HomeController::class, 'panduan'])->name('panduan');
Route::get('/statistik-penduduk', [App\Http\Controllers\GrafikController::class, 'index'])->name('statistik-penduduk');
Route::get('/statistik-penduduk/show', [App\Http\Controllers\GrafikController::class, 'show'])->name('statistik-penduduk.show');
Route::get('/anggaran-realisasi-cart', [App\Http\Controllers\AnggaranRealisasiController::class, 'cart'])->name('anggaran-realisasi.cart');
Route::post('/cetak-surat/{id}/{slug}', [App\Http\Controllers\CetakSuratController::class, 'store'])->name('cetak-surat.store');
Route::get('/penduduk/cetak', [App\Http\Controllers\PendudukController::class, 'cetakPenduduk'])->name('penduduk.cetak');
Route::get('/dusun/{id}', [App\Http\Controllers\DusunController::class, 'show'])->name('dusun.show');
Route::get('/penduduk', [App\Http\Controllers\PendudukController::class, 'index'])->name('penduduk.index');

// Rute Autentikasi
Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('/masuk', [App\Http\Controllers\AuthController::class, 'index'])->name('masuk');
    Route::post('/masuk', [App\Http\Controllers\AuthController::class, 'masuk']);
});

// Rute Terautentikasi
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::post('/keluar', [App\Http\Controllers\AuthController::class, 'keluar'])->name('keluar');
    
    // Profil dan Pengaturan
    Route::get('/pengaturan', [App\Http\Controllers\UserController::class, 'pengaturan'])->name('pengaturan');
    Route::get('/profil', [App\Http\Controllers\UserController::class, 'profil'])->name('profil');
    Route::patch('/update-pengaturan/{user}', [App\Http\Controllers\UserController::class, 'updatePengaturan'])->name('update-pengaturan');
    Route::patch('/update-profil/{user}', [App\Http\Controllers\UserController::class, 'updateProfil'])->name('update-profil');
    
    // Profil Desa
    Route::get('/profil-desa', [App\Http\Controllers\DesaController::class, 'index'])->name('profil-desa');
    Route::patch('/update-desa/{desa}', [App\Http\Controllers\DesaController::class, 'update'])->name('update-desa');
    
    // Surat
    Route::get('/tambah-surat', [App\Http\Controllers\SuratController::class, 'create'])->name('surat.create');
    Route::patch('/cetakSurat/{cetak_surat}/arsip', [App\Http\Controllers\CetakSuratController::class, 'arsip'])->name('cetakSurat.arsip');
    Route::resource('/cetakSurat', App\Http\Controllers\CetakSuratController::class)->except('create', 'store', 'index');
    Route::resource('/surat', App\Http\Controllers\SuratController::class)->except('create');
    
    // Pemerintahan Desa
    Route::get('/kelola-pemerintahan-desa', [App\Http\Controllers\PemerintahanDesaController::class, 'index'])->name('pemerintahan-desa.index');
    Route::get('/tambah-pemerintahan-desa', [App\Http\Controllers\PemerintahanDesaController::class, 'create'])->name('pemerintahan-desa.create');
    Route::get('/edit-pemerintahan-desa/{pemerintahan_desa}', [App\Http\Controllers\PemerintahanDesaController::class, 'edit'])->name('pemerintahan-desa.edit');
    Route::resource('/pemerintahan-desa', App\Http\Controllers\PemerintahanDesaController::class)->except('create', 'show', 'index', 'edit');
    
    // Berita
    Route::get('/kelola-berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
    Route::get('/tambah-berita', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
    Route::get('/edit-berita/{berita}', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
    Route::resource('/berita', App\Http\Controllers\BeritaController::class)->except('create', 'show', 'index', 'edit');
    
    // Isi Surat
    Route::resource('/isiSurat', App\Http\Controllers\IsiSuratController::class)->except('index', 'create', 'edit', 'show');
    
    // Gallery
    Route::post('/gallery/store', [App\Http\Controllers\GalleryController::class, 'storeGallery'])->name('gallery.storeGallery');
    Route::get('/kelola-gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery.index');
    Route::resource('/gallery', App\Http\Controllers\GalleryController::class)->except('index', 'show', 'edit', 'update', 'create');
    
    // Slider
    Route::get('/tambah-slider', [App\Http\Controllers\GalleryController::class, 'create'])->name('slider.create');
    Route::get('/slider', [App\Http\Controllers\GalleryController::class, 'indexSlider'])->name('slider.index');
    
    // Video
    Route::post('/video', [App\Http\Controllers\VideoController::class, 'store'])->name('video.store');
    Route::patch('/video/update', [App\Http\Controllers\VideoController::class, 'update'])->name('video.update');
    
    // Dashboard dan Laporan
    Route::get('/surat-harian', [App\Http\Controllers\HomeController::class, 'suratHarian'])->name('surat-harian');
    Route::get('/surat-bulanan', [App\Http\Controllers\HomeController::class, 'suratBulanan'])->name('surat-bulanan');
    Route::get('/surat-tahunan', [App\Http\Controllers\HomeController::class, 'suratTahunan'])->name('surat-tahunan');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    
    // Penduduk
    Route::resource('/penduduk', App\Http\Controllers\PendudukController::class)->except('show');
    Route::get('/penduduk', [App\Http\Controllers\PendudukController::class, 'index'])->name('penduduk.index');
    Route::get('/penduduk/create', [App\Http\Controllers\PendudukController::class, 'create'])->name('penduduk.create');
    Route::get('/penduduk/{penduduk}/edit', [App\Http\Controllers\PendudukController::class, 'edit'])->name('penduduk.edit');
    Route::delete('/penduduk/{penduduk}', [App\Http\Controllers\PendudukController::class, 'destroy'])->name('penduduk.destroy');
    Route::patch('/penduduk/{penduduk}', [App\Http\Controllers\PendudukController::class, 'update'])->name('penduduk.update');

    Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');




    // Anggaran Realisasi
    Route::get('/kelompok-jenis-anggaran/{kelompokJenisAnggaran}', [AnggaranRealisasiController::class, 'kelompokJenisAnggaran']);
    Route::get('/detail-jenis-anggaran/{id}', [AnggaranRealisasiController::class, 'show'])->name('detail-jenis-anggaran.show');
    Route::get('/tambah-anggaran-realisasi', [AnggaranRealisasiController::class, 'create'])->name('anggaran-realisasi.create');
    Route::resource('anggaran-realisasi', AnggaranRealisasiController::class)->except('create', 'show');
    
    // Dusun
    Route::get('/dusun', [App\Http\Controllers\DusunController::class, 'index']);
    Route::get('/tambah-dusun', [App\Http\Controllers\DusunController::class, 'create'])->name('dusun.create');
    Route::resource('dusun', App\Http\Controllers\DusunController::class)->except('create', 'show');
    Route::get('/dusun', [DusunController::class, 'index'])->name('dusun.index');
    // Chart Surat
    Route::get('/chart-surat/{id}', [SuratController::class, 'chartSurat'])->name('chart-surat');
});

// Fallback Route
Route::fallback(function() {
    abort(404);
});

Route::get('/kelola-aspirasi', [AspirasiController::class, 'kelola'])->name('aspirasi.kelola');

Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');
Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');