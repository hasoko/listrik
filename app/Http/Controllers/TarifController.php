<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarif;

class TarifController extends Controller
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
    public function simpanubah(Request $request, $id)
    {
        $tabelTarif = Tarif::findOrFail($id);
        $tabelTarif->tarifperkwh = $request->tarifperkwh;
        $tabelTarif->save();

        return redirect('/dashboard/datatarif');
    }
}
