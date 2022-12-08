<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPelanggan extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Data Pelanggan'
            ]
        ];
        return view('admin.datapelanggan.index', $data);
    }

    public function inputdatapelanggan()
    {
        $data = [
            'halaman' => [
                'title' => 'Input Data Pelanggan'
            ]
        ];
        return view('admin.datapelanggan.input', $data);
    }
}
