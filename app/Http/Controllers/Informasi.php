<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Informasi extends Controller
{
    public function index()
    {
        $data = [
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
