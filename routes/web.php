<?php

use App\Http\Controllers\DataUnit;
use App\Http\Controllers\DataPelanggan;
use App\Http\Controllers\DataTarif;
use App\Http\Controllers\HalamanAdmin;
use App\Http\Controllers\Informasi;
use App\Http\Controllers\DataKwhMeter;
use App\Http\Controllers\Laporan;
use App\Http\Controllers\Profil;
use App\Http\Controllers\Tagihan;
use App\Http\Controllers\TransaksiPembayaran;


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
    return view('welcome');
});

// route halaman admin
Route::get('/admin', [HalamanAdmin::class, 'index']);

Route::get('/admin/kwhmeter', [DataKwhMeter::class, 'index']);
Route::get('/admin/kwhmeter/input/{id}', [DataKwhMeter::class, 'inputkwh']);
Route::post('/admin/kwhmeter/simpan', [DataKwhMeter::class, 'simpan']);

Route::get('/admin/datapelanggan', [DataPelanggan::class, 'index']);
Route::get('/admin/datapelanggan/input', [DataPelanggan::class, 'inputdatapelanggan']);
Route::post('/admin/datapelanggan/simpan', [DataPelanggan::class, 'simpan']);
Route::delete('/admin/datapelanggan/{id}', [DataPelanggan::class, 'hapus']);
Route::get('/admin/datapelanggan/edit/{id}', [DataPelanggan::class, 'edit']);
Route::put('/admin/datapelanggan/simpanubah/{id}', [DataPelanggan::class, 'simpanubah']);


Route::get('/admin/dataunit', [DataUnit::class, 'index']);
Route::get('/admin/dataunit/input', [DataUnit::class, 'inputdataunit']);
Route::post('/admin/dataunit/simpan', [DataUnit::class, 'simpan']);

Route::get('/admin/datatarif', [DataTarif::class, 'index']);
Route::get('/admin/datatarif/edit/{id}', [DataTarif::class, 'edit']);

Route::get('/admin/informasi', [Informasi::class, 'index']);
Route::get('/admin/informasi/input', [Informasi::class, 'inputinformasi']);

Route::get('/admin/transaksipembayaran', [TransaksiPembayaran::class, 'index']);
Route::get('/admin/transaksipembayaran/invoice/{id}', [TransaksiPembayaran::class, 'invoice']);
Route::put('/admin/transaksipembayaran/bayar/{id}', [TransaksiPembayaran::class, 'bayar']);

Route::get('/admin/laporan', [Laporan::class, 'index']);

Route::get('/pengguna/profil', [Profil::class, 'index']);

Route::get('/pengguna/tagihan', [Tagihan::class, 'index']);


//end route halaman admin