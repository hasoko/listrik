<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Profil'
            ]
        ];
        return view('dashboard.profil.index', $data);
    }
}
