<?php


use App\Http\Controllers\UnitController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\HalamanDashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KwhMeterController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TransaksiPembayaranController;

use GuzzleHttp\MiddlewareController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;
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


Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:Admin,Pelanggan,Petugas,Kasir']], function () {

    Route::get('/dashboard', [HalamanDashboardController::class, 'index'])->name('dashboard');
});


Route::group(['middleware' => ['auth', 'ceklevel:Petugas']], function () {

    Route::get('/dashboard/kwhmeter', [KwhMeterController::class, 'index']);
    Route::get('/dashboard/kwhmeter/input/{id}', [KwhMeterController::class, 'inputkwh']);
    Route::post('/dashboard/kwhmeter/simpan', [KwhMeterController::class, 'simpan']);
});


Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {

    Route::get('/dashboard/datapelanggan', [PelangganController::class, 'index']);
    Route::get('/dashboard/datapelanggan/input', [PelangganController::class, 'inputdatapelanggan']);
    Route::post('/dashboard/datapelanggan/simpan', [PelangganController::class, 'simpan']);
    Route::delete('/dashboard/datapelanggan/{id}', [PelangganController::class, 'hapus']);
    Route::get('/dashboard/datapelanggan/edit/{id}', [PelangganController::class, 'edit']);
    Route::put('/dashboard/datapelanggan/simpanubah/{id}', [PelangganController::class, 'simpanubah']);

    Route::get('/dashboard/dataunit', [UnitController::class, 'index']);
    Route::get('/dashboard/dataunit/input', [UnitController::class, 'inputdataunit']);
    Route::post('/dashboard/dataunit/simpan', [UnitController::class, 'simpan']);

    Route::get('/dashboard/datatarif', [TarifController::class, 'index']);
    Route::get('/dashboard/datatarif/edit/{id}', [TarifController::class, 'edit']);
    Route::put('/dashboard/datatarif/simpanubah/{id}', [TarifController::class, 'simpanubah']);

    Route::get('/dashboard/informasi', [InformasiController::class, 'index']);
    Route::get('/dashboard/informasi/input', [InformasiController::class, 'input']);
    Route::post('/dashboard/informasi/simpan', [InformasiController::class, 'simpan']);
    Route::delete('/dashboard/informasi/{id}', [InformasiController::class, 'hapus']);
    Route::get('/dashboard/informasi/edit/{id}', [InformasiController::class, 'edit']);
    Route::put('/dashboard/informasi/simpanubah/{id}', [InformasiController::class, 'simpanubah']);

    Route::get('/dashboard/laporan', [LaporanController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'ceklevel:Kasir']], function () {

    Route::get('/dashboard/transaksipembayaran', [TransaksiPembayaranController::class, 'index']);
    Route::get('/dashboard/transaksipembayaran/invoice/{id}', [TransaksiPembayaranController::class, 'invoice']);
    Route::get('/dashboard/transaksipembayaran/cetak/{id}', [TransaksiPembayaranController::class, 'cetak']);
    Route::put('/dashboard/transaksipembayaran/bayar/{id}', [TransaksiPembayaranController::class, 'bayar']);
});

Route::group(['middleware' => ['auth', 'ceklevel:Pelanggan']], function () {
    Route::get('/dashboard/profil', [ProfilController::class, 'index']);
    Route::put('/dashboard/profil/simpanubah/{id}', [ProfilController::class, 'simpanubah']);

    Route::get('/dashboard/tagihan', [TagihanController::class, 'index']);
    Route::get('/dashboard/tagihan/detail/{id}', [TagihanController::class, 'detail']);
});
    //end midleware
