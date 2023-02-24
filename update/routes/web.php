<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\TesStoreController;
use App\Http\Controllers\UserController;
use App\Models\Penyakit;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/tes', [TesController::class, 'tes'])->middleware('auth');
Route::get('/tes-ulang', [TesController::class, 'tesUlang'])->middleware('auth');
Route::get('/store-tes', [TesStoreController::class, 'storeTes'])->middleware('auth');
Route::get('/remove-tes', [TesStoreController::class, 'removeTes'])->middleware('auth');
Route::get('/tes-submit', [TesController::class, 'submitTes'])->middleware('auth');
Route::get('/hasil', [TesController::class, 'hasilTes'])->middleware('auth');

Route::get('/c', function () {
    return view('secmain');
});
Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/regist', function () {
    return view('regis');
});
Route::post('/daftar-baru', [UserController::class, 'regis']);
Route::post('/login', [UserController::class, 'login']);

// Expert
Route::get('/gejala', [GejalaController::class, 'index'])->middleware('expert');
Route::get('/gejala-baru', [GejalaController::class, 'gejalaBaru'])->middleware('expert');
Route::get('/edit-gejala', [GejalaController::class, 'editGejala'])->middleware('expert');

Route::get('/penyakit', [PenyakitController::class, 'index'])->middleware('expert');
Route::get('/hapus-penyakit', [PenyakitController::class, 'hapusPenyakit'])->middleware('expert');
Route::get('/penyakit-baru', [PenyakitController::class, 'penyakitBaru'])->middleware('expert');
Route::get('/detail', [PenyakitController::class, 'detail'])->middleware('expert');
Route::post('/tambah-gejala/{id}', [PenyakitController::class, 'tambahGejala'])->middleware('expert');
Route::get('/kurangi-gejala/{id}', [PenyakitController::class, 'kurangiGejala'])->middleware('expert');
Route::get('/save-bobot', [PenyakitController::class, 'saveBobot'])->middleware('expert');
Route::get('/edit-nama-penyakit', [PenyakitController::class, 'editNamaPenyakit'])->middleware('expert');

Route::get('/profil', [UserController::class, 'profilExpert'])->middleware('expert');
Route::post('/update-profil', [UserController::class, 'updateProfilExpert'])->middleware('expert');

// Admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/detail-penyakit', [AdminController::class, 'detailPenyakit'])->middleware('admin');
Route::get('/save-deskripsi/{id}', [AdminController::class, 'saveDeskripsi'])->middleware('admin');

Route::get('/data-expert', [ExpertController::class, 'index'])->middleware('admin');
Route::get('/detail-expert/{id}', [ExpertController::class, 'detailExpert'])->middleware('admin');
Route::post('/update-profil-expert/{id}', [ExpertController::class, 'updateDataExpert'])->middleware('admin');
Route::get('/tambah-expert', [ExpertController::class, 'tambahExpert'])->middleware('admin');
Route::post('/tambah-expert', [ExpertController::class, 'storeExpert'])->middleware('admin');
Route::get('/hapus-expert/{id}', [ExpertController::class, 'hapusExpert'])->middleware('admin');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/pasien', [UserController::class, 'semuaPasien']);
    Route::get('/detail-pasien/{id}', [UserController::class, 'detailPasien']);
});
