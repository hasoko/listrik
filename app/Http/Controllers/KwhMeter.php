<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KwhMeter extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'KWH Meter'
            ]
        ];
        return view('admin.kwhmeter.index', $data);
    }

    public function inputkwh()
    {
        return view('admin.kwhmeter.input');
    }
}
