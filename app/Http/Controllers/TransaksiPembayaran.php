<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiPembayaran extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Transaksi'
            ]
        ];
        return view('admin.transaksipembayaran.index', $data);
    }

    public function invoice()
    {
        $data = [
            'halaman' => [
                'title' => 'Invoice'
            ]
        ];
        return view('admin.transaksipembayaran.invoice', $data);
    }
}
