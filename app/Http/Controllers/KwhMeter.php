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
        $data = [
            'halaman' => [
                'title' => 'Input KWH'
            ]
        ];
        return view('admin.kwhmeter.input', $data);
    }
}
