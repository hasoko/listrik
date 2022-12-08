<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profil extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Profil'
            ]
        ];
        return view('pengguna.profil.index', $data);
    }
}
