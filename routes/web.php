<?php

use App\Http\Controllers\DataUnit;
use App\Http\Controllers\DataPelanggan;
use App\Http\Controllers\DataTarif;
use App\Http\Controllers\HalamanDashboard;
use App\Http\Controllers\Informasi;
use App\Http\Controllers\DataKwhMeter;
use App\Http\Controllers\Laporan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Profil;
use App\Http\Controllers\Tagihan;
use App\Http\Controllers\TransaksiPembayaran;
use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {


// route halaman admin
Route::get('/dashboard', [HalamanDashboard::class, 'index'])->name('dashboard');

Route::get('/dashboard/kwhmeter', [DataKwhMeter::class, 'index']);
Route::get('/dashboard/kwhmeter/input/{id}', [DataKwhMeter::class, 'inputkwh']);
Route::post('/dashboard/kwhmeter/simpan', [DataKwhMeter::class, 'simpan']);

Route::get('/dashboard/datapelanggan', [DataPelanggan::class, 'index']);
Route::get('/dashboard/datapelanggan/input', [DataPelanggan::class, 'inputdatapelanggan']);
Route::post('/dashboard/datapelanggan/simpan', [DataPelanggan::class, 'simpan']);
Route::delete('/dashboard/datapelanggan/{id}', [DataPelanggan::class, 'hapus']);
Route::get('/dashboard/datapelanggan/edit/{id}', [DataPelanggan::class, 'edit']);
Route::put('/dashboard/datapelanggan/simpanubah/{id}', [DataPelanggan::class, 'simpanubah']);


Route::get('/dashboard/dataunit', [DataUnit::class, 'index']);
Route::get('/dashboard/dataunit/input', [DataUnit::class, 'inputdataunit']);
Route::post('/dashboard/dataunit/simpan', [DataUnit::class, 'simpan']);

Route::get('/dashboard/datatarif', [DataTarif::class, 'index']);
Route::get('/dashboard/datatarif/edit/{id}', [DataTarif::class, 'edit']);

Route::get('/dashboard/informasi', [Informasi::class, 'index']);
Route::get('/dashboard/informasi/input', [Informasi::class, 'inputinformasi']);

Route::get('/dashboard/transaksipembayaran', [TransaksiPembayaran::class, 'index']);
Route::get('/dashboard/transaksipembayaran/invoice/{id}', [TransaksiPembayaran::class, 'invoice']);
Route::put('/dashboard/transaksipembayaran/bayar/{id}', [TransaksiPembayaran::class, 'bayar']);

Route::get('/dashboard/laporan', [Laporan::class, 'index']);

Route::get('/dashboard/profil', [Profil::class, 'index']);

Route::get('/dashboard/tagihan', [Tagihan::class, 'index']);

    //end midleware
// });
