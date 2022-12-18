<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarif;

class DataTarif extends Controller
{
    public function index()
    {
        $data = [
            'tarif' => Tarif::all(),
            'halaman' => [
                'title' => 'Data Tarif'
            ]
        ];
        // dd($data);
        return view('dashboard.datatarif.index', $data);
    }

    public function edit($id)
    {
        // dd($id);
        $data = [
            'tarif' => Tarif::findOrFail($id),
            'halaman' => [
                'title' => 'Edit Tarif'
            ]
        ];
        return view('dashboard.datatarif.input', $data);
    }
}
