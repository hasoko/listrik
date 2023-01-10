<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $data = [
            // 'pembayaran' => Pembayaran::all(),
            'pembayaran' => Pembayaran::select()->orderBy('tgl_bayar', 'desc')->get(),
            'halaman' => [
                'title' => 'Laporan Tagihan Listrik TMII'
            ]
        ];
        return view('dashboard.laporan.index', $data);
    }
}
