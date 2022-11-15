<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPelanggan extends Controller
{
    public function index()
    {
        return view('admin.datapelanggan.index');
    }

    public function inputdatapelanggan()
    {
        return view('admin.datapelanggan.input');
    }
}
