<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Unit;
use App\Models\User;
use App\Models\Kwhmeter;

use App\Models\Pelanggan;
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
        return view('dashboard.datapelanggan.index', $data);
    }

    public function inputdatapelanggan()
    {
        $data = [
            'unit' => Unit::all(),
            'halaman' => [
                'title' => 'Input Data Pelanggan'
            ]
        ];
        return view('dashboard.datapelanggan.input', $data);
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
        // echo Carbon::now()->month;
        // echo Carbon::now()->year;
        // echo Carbon::now()->toDateString();

        $tabelPelanggan = new Pelanggan;
        $tabelPelanggan->id_pelanggan = $idbaru;
        $tabelPelanggan->faktor_meter = $request->faktor_meter;
        $tabelPelanggan->nama = $request->nama;
        $tabelPelanggan->npwp = $request->npwp;
        $tabelPelanggan->telepon = $request->telepon;
        $tabelPelanggan->id_unit = $request->id_unit;
        $tabelPelanggan->save();

        $bulanini = Carbon::now()->month;
        $tahunini = Carbon::now()->year;
        $tanggalskrg = Carbon::now()->toDateString();

        $tabelKwhmeter = new Kwhmeter;
        $tabelKwhmeter->bulan = $bulanini;
        $tabelKwhmeter->tahun = $tahunini;
        $tabelKwhmeter->meter_awal = 0;
        $tabelKwhmeter->meter_akhir = $request->meter_dipasang;
        // $tabelKwhmeter->tanggal_catat = $tanggalskrg;
        $tabelKwhmeter->id_pelanggan = $idbaru;
        $tabelKwhmeter->save();

        $tabelUser = new User;
        $tabelUser->username = $idbaru;
        $tabelUser->password = bcrypt('123456');
        $tabelUser->level = 'Pelanggan';
        $tabelUser->save();

        return redirect('/dashboard/datapelanggan');
    }

    public function hapus($id_pelanggan)
    {
        $model = Pelanggan::where('id_pelanggan', $id_pelanggan);
        $model->delete();
        return redirect('/dashboard/datapelanggan');
    }

    public function edit($id)
    {
        $data = [
            'pelanggan' => Pelanggan::findOrFail($id),
            'unit' => Unit::all(),
            'halaman' => [
                'title' => 'Edit Data Pelanggan'
            ]
        ];
        return view('dashboard.datapelanggan.edit', $data);
    }

    public function simpanubah(Request $request, $id)
    {
        $tabelPelanggan = Pelanggan::findOrFail($id);
        $tabelPelanggan->faktor_meter = $request->faktor_meter;
        $tabelPelanggan->nama = $request->nama;
        $tabelPelanggan->npwp = $request->npwp;
        $tabelPelanggan->telepon = $request->telepon;
        $tabelPelanggan->id_unit = $request->id_unit;
        $tabelPelanggan->save();

        return redirect('/dashboard/datapelanggan');
    }
}
