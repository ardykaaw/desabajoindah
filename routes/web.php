<?php

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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/peta', [PetaController::class, 'index'])->name('peta.index');
Route::get('/laporan-apbdes', [AnggaranRealisasiController::class, 'laporan_apbdes'])->name('laporan-apbdes');
Route::get('/layanan-surat', [SuratController::class, 'layanan_surat'])->name('layanan-surat');
Route::get('/pemerintahan-desa', [PemerintahanDesaController::class, 'pemerintahan_desa'])->name('pemerintahan-desa');
Route::get('/pemerintahan-desa/{pemerintahan_desa}/{slug}', [PemerintahanDesaController::class, 'show'])->name('pemerintahan-desa.show');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/berita/{berita}/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');
Route::get('/buat-surat/{id}/{slug}', [CetakSuratController::class, 'create'])->name('buat-surat');
Route::get('/panduan', [HomeController::class, 'panduan'])->name('panduan');
Route::get('/statistik-penduduk', [GrafikController::class, 'index'])->name('statistik-penduduk');
Route::get('/statistik-penduduk/show', [GrafikController::class, 'show'])->name('statistik-penduduk.show');
Route::get('/anggaran-realisasi-cart', [AnggaranRealisasiController::class, 'cart'])->name('anggaran-realisasi.cart');
Route::post('/cetak-surat/{id}/{slug}', [CetakSuratController::class, 'store'])->name('cetak-surat.store');
Route::get('/penduduk/cetak', [PendudukController::class, 'cetakPenduduk'])->name('penduduk.cetak');
Route::get('/dusun/{id}', [DusunController::class, 'show'])->name('dusun.show');
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');

// Rute Autentikasi
Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('/masuk', [AuthController::class, 'index'])->name('masuk');
    Route::post('/masuk', [AuthController::class, 'masuk']);
});

// Rute Terautentikasi
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::post('/keluar', [AuthController::class, 'keluar'])->name('keluar');
    
    // Profil dan Pengaturan
    Route::get('/pengaturan', [UserController::class, 'pengaturan'])->name('pengaturan');
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::patch('/update-pengaturan/{user}', [UserController::class, 'updatePengaturan'])->name('update-pengaturan');
    Route::patch('/update-profil/{user}', [UserController::class, 'updateProfil'])->name('update-profil');
    
    // Profil Desa
    Route::get('/profil-desa', [DesaController::class, 'index'])->name('profil-desa');
    Route::patch('/update-desa/{desa}', [DesaController::class, 'update'])->name('update-desa');
    
    // Surat
    Route::get('/tambah-surat', [SuratController::class, 'create'])->name('surat.create');
    Route::patch('/cetakSurat/{cetak_surat}/arsip', [CetakSuratController::class, 'arsip'])->name('cetakSurat.arsip');
    Route::resource('/cetakSurat', CetakSuratController::class)->except('create', 'store', 'index');
    Route::resource('/surat', SuratController::class)->except('create');
    
    // Pemerintahan Desa
    Route::get('/kelola-pemerintahan-desa', [PemerintahanDesaController::class, 'index'])->name('pemerintahan-desa.index');
    Route::get('/tambah-pemerintahan-desa', [PemerintahanDesaController::class, 'create'])->name('pemerintahan-desa.create');
    Route::get('/edit-pemerintahan-desa/{pemerintahan_desa}', [PemerintahanDesaController::class, 'edit'])->name('pemerintahan-desa.edit');
    Route::resource('/pemerintahan-desa', PemerintahanDesaController::class)->except('create', 'show', 'index', 'edit');
    
    // Berita
    Route::get('/kelola-berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/tambah-berita', [BeritaController::class, 'create'])->name('berita.create');
    Route::get('/edit-berita/{berita}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::resource('/berita', BeritaController::class)->except('create', 'show', 'index', 'edit');
    
    // Isi Surat
    Route::resource('/isiSurat', IsiSuratController::class)->except('index', 'create', 'edit', 'show');
    
    // Gallery
    Route::post('/gallery/store', [GalleryController::class, 'storeGallery'])->name('gallery.storeGallery');
    Route::get('/kelola-gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::resource('/gallery', GalleryController::class)->except('index', 'show', 'edit', 'update', 'create');
    
    // Slider
    Route::get('/tambah-slider', [GalleryController::class, 'create'])->name('slider.create');
    Route::get('/slider', [GalleryController::class, 'indexSlider'])->name('slider.index');
    
    // Video
    Route::post('/video', [VideoController::class, 'store'])->name('video.store');
    Route::patch('/video/update', [VideoController::class, 'update'])->name('video.update');
    
    // Dashboard dan Laporan
    Route::get('/surat-harian', [HomeController::class, 'suratHarian'])->name('surat-harian');
    Route::get('/surat-bulanan', [HomeController::class, 'suratBulanan'])->name('surat-bulanan');
    Route::get('/surat-tahunan', [HomeController::class, 'suratTahunan'])->name('surat-tahunan');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    
    // Penduduk
    Route::resource('penduduk', PendudukController::class);
    
    // Anggaran Realisasi
    Route::get('/kelompok-jenis-anggaran/{kelompokJenisAnggaran}', [AnggaranRealisasiController::class, 'kelompokJenisAnggaran']);
    Route::get('/detail-jenis-anggaran/{id}', [AnggaranRealisasiController::class, 'show'])->name('detail-jenis-anggaran.show');
    Route::get('/tambah-anggaran-realisasi', [AnggaranRealisasiController::class, 'create'])->name('anggaran-realisasi.create');
    Route::resource('anggaran-realisasi', AnggaranRealisasiController::class)->except('create', 'show');
    
    // Dusun
    Route::get('/tambah-dusun', [DusunController::class, 'create'])->name('dusun.create');
    Route::resource('dusun', DusunController::class)->except('create', 'show');
    
    // Chart Surat
    Route::get('/chart-surat/{id}', [SuratController::class, 'chartSurat'])->name('chart-surat');
});

// Fallback Route
Route::fallback(fn() => abort(404));

Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');
Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');