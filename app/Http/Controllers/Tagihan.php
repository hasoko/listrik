<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tagihan extends Controller
{
    public function index()
    {
        $data = 
        [
            'halaman' => 
            [
                'title' => 'head Tagihan',
                'isi' => 'ini isi'
            ]
        ];
        return view('pengguna.tagihan.index', $data);
    }
}
