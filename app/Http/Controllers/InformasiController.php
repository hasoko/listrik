<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Carbon\Carbon;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

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
        $this->validate(
            $request,
            [
                'judul' => 'required',
                'isi' => 'required'
            ],

        );
        // dd($request)
        $tabelInformasi = new Informasi;
        $tabelInformasi->judul = $request->judul;
        $tabelInformasi->isi = $request->isi;
        $tabelInformasi->tgl_informasi = Carbon::now()->toDateString();
        $tabelInformasi->id_user = 1;
        $tabelInformasi->save();

        return redirect('/dashboard/informasi')->with('toast_success', 'Berhasil disimpan!', 'autoClose', 5000);
    }

    public function hapus($id_informasi)
    {
        $model = Informasi::where('id_informasi', $id_informasi);
        $model->delete();
        return redirect('/dashboard/informasi')->with('toast_success', 'Berhasil dihapus!');
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

        return redirect('/dashboard/informasi')->with('toast_success', 'Berhasil diedit!');
    }
}
