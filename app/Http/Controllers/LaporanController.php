<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $data = [
            'pembayaran' => Pembayaran::all(),
            'halaman' => [
                'title' => 'Laporan'
            ]
        ];
        return view('dashboard.laporan.index', $data);
    }
}
