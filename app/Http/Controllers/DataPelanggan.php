<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Unit;
use Illuminate\Http\Request;

class DataPelanggan extends Controller
{
    public function index()
    {
        $data = [
            'pelanggan' => Pelanggan::all(),
            'halaman' => [
                'title' => 'Data Pelanggan'
            ]
        ];
        return view('admin.datapelanggan.index', $data);
    }

    public function inputdatapelanggan()
    {
        $data = [
            'unit' => Unit::all(),
            'halaman' => [
                'title' => 'Input Data Pelanggan'
            ]
        ];
        return view('admin.datapelanggan.input', $data);
    }

    public function simpan(Request $request)
    {

        // membuat ID Pelanggan
        if (Pelanggan::where('id_unit', $request->id_unit)->count() > 0) {
            $prefixid = Pelanggan::where('id_unit', $request->id_unit)->orderBy('id_pelanggan', 'desc')->take(1)->get();
            foreach ($prefixid as $value);
            $idbaru = $value->id_pelanggan + 1;
        } else {
            $prefixid = Unit::where('id_unit', $request->id_unit)->take(1)->get();
            foreach ($prefixid as $unit);
            $idbaru = $unit->prefix . '' . '0001';
        }
        // echo $prefixid;

        $tabelPelanggan = new Pelanggan;
        $tabelPelanggan->id_pelanggan = $idbaru;
        $tabelPelanggan->faktor_meter = $request->faktor_meter;
        $tabelPelanggan->nama = $request->nama;
        $tabelPelanggan->npwp = $request->npwp;
        $tabelPelanggan->telepon = $request->telepon;
        $tabelPelanggan->id_unit = $request->id_unit;
        $tabelPelanggan->save();

        return redirect('/admin/datapelanggan');
    }

    public function hapus($id_pelanggan)
    {
        $model = Pelanggan::where('id_pelanggan', $id_pelanggan);
        $model->delete();
        return redirect('/admin/datapelanggan');
    }
}
