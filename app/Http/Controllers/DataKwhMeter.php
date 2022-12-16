<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Kwhmeter;
use App\Models\Unit;

class DataKwhMeter extends Controller
{
    public function index()
    {
        $data = [
            'pelanggans' => Pelanggan::all(),
            // 'kwhmeter' => Kwhmeter::all(),
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
