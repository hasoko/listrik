<?php

use App\Http\Controllers\DataDaya;
use App\Http\Controllers\DataPelanggan;
use App\Http\Controllers\DataTarif;
use App\Http\Controllers\HalamanAdmin;
use App\Http\Controllers\Informasi;
use App\Http\Controllers\KwhMeter;
use App\Http\Controllers\Laporan;
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

Route::get('/admin/kwhmeter', [KwhMeter::class, 'index']);
Route::get('/admin/kwhmeter/input', [KwhMeter::class, 'inputkwh']);

Route::get('/admin/datapelanggan', [DataPelanggan::class, 'index']);
Route::get('/admin/datapelanggan/input', [DataPelanggan::class, 'inputdatapelanggan']);

Route::get('/admin/datadaya', [DataDaya::class, 'index']);
Route::get('/admin/datadaya/input', [DataDaya::class, 'inputdatadaya']);

Route::get('/admin/datatarif', [DataTarif::class, 'index']);
Route::get('/admin/datatarif/input', [DataTarif::class, 'inputdatatarif']);

Route::get('/admin/informasi', [Informasi::class, 'index']);
Route::get('/admin/informasi/input', [Informasi::class, 'inputinformasi']);

Route::get('/admin/transaksipembayaran', [TransaksiPembayaran::class, 'index']);

Route::get('/admin/laporan', [Laporan::class, 'index']);

//end route halaman admin