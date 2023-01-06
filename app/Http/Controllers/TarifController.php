<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tarif;

use RealRashid\SweetAlert\Facades\Alert;

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
        $tabelTarif->tarif_lwbp = $request->tarif_lwbp;
        $tabelTarif->tarif_wbp = $request->tarif_wbp;
        $tabelTarif->save();

        return redirect('/dashboard/datatarif')->with('toast_success', 'Berhasil diedit!');
    }
}
