<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function simpanubah(Request $request, $id)
    {
        $tabelPelanggan = Pelanggan::findOrFail($id);
        $tabelPelanggan->npwp = $request->npwp;
        $tabelPelanggan->telepon = $request->telepon;
        $tabelPelanggan->save();

        return redirect('/dashboard/profil')->with('toast_success', 'Berhasil disimpan!');
    }
}
