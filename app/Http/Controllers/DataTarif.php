<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTarif extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Data Tarif'
            ]
        ];
        return view('admin.datatarif.index', $data);
    }

    public function inputdatatarif()
    {
        $data = [
            'halaman' => [
                'title' => 'Input Tarif'
            ]
        ];
        return view('admin.datatarif.input', $data);
    }
}
