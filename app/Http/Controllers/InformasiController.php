<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        $data = [
            'informasi' => Informasi::all(),
            'halaman' => [
                'title' => 'Informasi'
            ]
        ];
        return view('dashboard.informasi.index', $data);
    }

    public function input()
    {
        $data = [
            'halaman' => [
                'title' => 'Input Informasi'
            ]
        ];
        return view('dashboard.informasi.input', $data);
    }

    public function simpan(Request $request)
    {
        // dd($request)
        $tabelInformasi = new Informasi;
        $tabelInformasi->judul = $request->judul;
        $tabelInformasi->isi = $request->isi;
        $tabelInformasi->tanggal = Carbon::now()->toDateString();
        $tabelInformasi->id_user = 1;
        $tabelInformasi->save();

        return redirect('/dashboard/informasi');
    }

    public function hapus($id_informasi)
    {
        $model = Informasi::where('id_informasi', $id_informasi);
        $model->delete();
        return redirect('/dashboard/informasi');
    }


    public function edit($id)
    {
        $data = [
            'informasi' => Informasi::findOrFail($id),
            'halaman' => [
                'title' => 'Edit Data Informasi'
            ]
        ];
        return view('dashboard.informasi.edit', $data);
    }

    public function simpanubah(Request $request, $id)
    {
        $tabelInformasi = Informasi::findOrFail($id);
        $tabelInformasi->judul = $request->judul;
        $tabelInformasi->isi = $request->isi;
        $tabelInformasi->save();

        return redirect('/dashboard/informasi');
    }
}
