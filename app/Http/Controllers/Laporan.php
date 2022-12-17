<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;

use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function index()
    {
        $data = [
            'pembayaran' => Pembayaran::all(),
            'halaman' => [
                'title' => 'Laporan'
            ]
        ];
        return view('admin.laporan.index', $data);
    }
}
