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


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/laporan-apbdes', [AnggaranRealisasiController::class, 'laporan_apbdes'])->name('laporan-apbdes');
Route::get('/layanan-surat', [SuratController::class, 'layanan_surat'])->name('layanan-surat');
Route::get('/pemerintahan-desa', [PemerintahanDesaController::class, 'pemerintahan_desa'])->name('pemerintahan-desa');
Route::get('/pemerintahan-desa/{pemerintahan_desa}', fn() => abort(404));
Route::get('/pemerintahan-desa/{pemerintahan_desa}/{slug}', [PemerintahanDesaController::class, 'show'])->name('pemerintahan-desa.show');
Route::get('/berita', [BeritaController::class, 'berita'])->name('berita');
Route::get('/berita/{berita}/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/{berita}', fn() => abort(404));
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

Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('/masuk', [AuthController::class, 'index'])->name('masuk');
    Route::post('/masuk', [AuthController::class, 'masuk']);
});

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::post('/keluar', [AuthController::class, 'keluar'])->name('keluar');
    Route::get('/pengaturan', [UserController::class, 'pengaturan'])->name('pengaturan');
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::patch('/update-pengaturan/{user}', [UserController::class, 'updatePengaturan'])->name('update-pengaturan');
    Route::patch('/update-profil/{user}', [UserController::class, 'updateProfil'])->name('update-profil');

    Route::get('/profil-desa', [DesaController::class, 'index'])->name('profil-desa');
    Route::patch('/update-desa/{desa}', [DesaController::class, 'update'])->name('update-desa');

    Route::get('/tambah-surat', [SuratController::class, 'create'])->name('surat.create');
    Route::patch('/cetakSurat/{cetak_surat}/arsip', [CetakSuratController::class, 'arsip'])->name('cetakSurat.arsip');
    Route::resource('/cetakSurat', CetakSuratController::class)->except('create', 'store', 'index');
    Route::resource('/surat', SuratController::class)->except('create');

    Route::get('/kelola-pemerintahan-desa', [PemerintahanDesaController::class, 'index'])->name('pemerintahan-desa.index');
    Route::get('/tambah-pemerintahan-desa', [PemerintahanDesaController::class, 'create'])->name('pemerintahan-desa.create');
    Route::get('/edit-pemerintahan-desa/{pemerintahan_desa}', [PemerintahanDesaController::class, 'edit'])->name('pemerintahan-desa.edit');
    Route::resource('/pemerintahan-desa', PemerintahanDesaController::class)->except('create', 'show', 'index', 'edit');

    Route::get('/kelola-berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/tambah-berita', [BeritaController::class, 'create'])->name('berita.create');
    Route::get('/edit-berita/{berita}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::resource('/berita', BeritaController::class)->except('create', 'show', 'index', 'edit');

    Route::resource('/isiSurat', IsiSuratController::class)->except('index', 'create', 'edit', 'show');

    Route::post('/gallery/store', [GalleryController::class, 'storeGallery'])->name('gallery.storeGallery');
    Route::get('/kelola-gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::resource('/gallery', GalleryController::class)->except('index', 'show', 'edit', 'update', 'create');

    Route::get('/tambah-slider', [GalleryController::class, 'create'])->name('slider.create');
    Route::get('/slider', [GalleryController::class, 'indexSlider'])->name('slider.index');

    Route::post('/video', [VideoController::class, 'store'])->name('video.store');
    Route::patch('/video/update', [VideoController::class, 'update'])->name('video.update');

    Route::get('/surat-harian', [HomeController::class, 'suratHarian'])->name('surat-harian');
    Route::get('/surat-bulanan', [HomeController::class, 'suratBulanan'])->name('surat-bulanan');
    Route::get('/surat-tahunan', [HomeController::class, 'suratTahunan'])->name('surat-tahunan');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/tambah-penduduk', [PendudukController::class, 'create'])->name('penduduk.create');
    Route::get('/penduduk/{penduduk}', fn() => abort(404));
    Route::resource('penduduk', PendudukController::class)->except('create', 'show');

    Route::get('/kelompok-jenis-anggaran/{kelompokJenisAnggaran}', [AnggaranRealisasiController::class, 'kelompokJenisAnggaran']);
    Route::get('/detail-jenis-anggaran/{id}', [AnggaranRealisasiController::class, 'show'])->name('detail-jenis-anggaran.show');
    Route::get('/tambah-anggaran-realisasi', [AnggaranRealisasiController::class, 'create'])->name('anggaran-realisasi.create');
    Route::get('/anggaran-realisasi/{anggaran_realisasi}', fn() => abort(404));
    Route::resource('anggaran-realisasi', AnggaranRealisasiController::class)->except('create', 'show');

    Route::get('/tambah-dusun', [DusunController::class, 'create'])->name('dusun.create');
    Route::resource('dusun', DusunController::class)->except('create', 'show');
    Route::resource('detailDusun', DetailDusunController::class)->except('create', 'edit');

    Route::get('/chart-surat/{id}', [SuratController::class, 'chartSurat'])->name('chart-surat');
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::fallback(fn() => abort(404));