<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Laporan'
            ]
        ];
        return view('admin.laporan.index', $data);
    }
}
