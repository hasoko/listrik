<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $data = [
            'informasi' => Informasi::all(),
            'halaman' => [
                'title' => 'Informasi'
            ]
        ];
        return view('dashboard.informasi.index', $data);
    }

    public function inputinformasi()
    {
        $data = [
            'halaman' => [
                'title' => 'Input Informasi'
            ]
        ];
        return view('dashboard.informasi.input', $data);
    }
}
