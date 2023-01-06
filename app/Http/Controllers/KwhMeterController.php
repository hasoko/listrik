<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Kwhmeter;
use App\Models\Pelanggan;
use App\Models\Tagihan;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use RealRashid\SweetAlert\Facades\Alert;

class KwhMeterController extends Controller
{
    //menampilkan data kwh meter
    public function index()
    {

        $data = [
            'kwhmeter' => Kwhmeter::whereRaw('id_kwhmeter in (select max(id_kwhmeter) from kwhmeter group by (id_pelanggan))')->get(),

            'halaman' => [
                'title' => 'KWH Meter'
            ]
        ];
        // dd($data);
        return view('dashboard.kwhmeter.index', $data);
    }


    // menampilkan detail kwh meter yang akan di input 
    public function inputkwh($id)
    {

        $data = [
            'kwhmeter' => Kwhmeter::where('id_pelanggan', $id)->orderBy('tgl_catat', 'desc')->first(),
            'halaman' => [
                'title' => 'Input KWH'
            ]
        ];
        // dd($data);
        return view('dashboard.kwhmeter.input', $data);
    }


    // menyimpan kwh meter yang di input
    public function simpan(Request $request)

    {

        $this->validate(
            $request,
            [
                'meter_akhir' => 'required'
            ],

        );
        $meter = $request->meter_akhir - $request->meter_awal;
        $jumlahmeter = $request->faktor_meter * $meter;

        $getidkwh = Kwhmeter::select()->orderBy('id_kwhmeter', 'desc')->take(1)->get();
        foreach ($getidkwh as $value);
        $idkwhbaru = $value->id_kwhmeter;


        $lwbp = Tarif::select()->orderBy('id_tarif', 'desc')->take(1)->get();
        foreach ($lwbp as $value);
        $tariflwbp = $value->tarif_lwbp;

        $wbp = Tarif::select()->orderBy('id_tarif', 'desc')->take(1)->get();
        foreach ($wbp as $value);
        $tarifwbp = $value->tarif_wbp;

        $jumlahlwbp = $tariflwbp * $jumlahmeter * 67 / 100;
        $jumlahwbp = $tarifwbp * $jumlahmeter * 33 / 100;

        $sebelumsubtotal = $jumlahlwbp + $jumlahwbp;

        $jumlahpjudki = $sebelumsubtotal * 3 / 100;
        $jumlahpemeliharaan = $sebelumsubtotal * 5 / 100;

        $subtotal = $jumlahlwbp + $jumlahwbp + $jumlahpjudki + $jumlahpemeliharaan;

        if ($subtotal >= 1000000) {
            $materai = 10000;
        } else {
            $materai = 0;
        }


        if ($request->meter_akhir <= $request->meter_awal) {
            // echo "gagal";
            return back()->with('toast_error', 'Kwh meter yang dimasukkan harus lebih besar dari Meter Awal');
        } else {

            $bulanini = Carbon::now()->month;
            $tahunini = Carbon::now()->year;
            $tanggalskrg = Carbon::now()->toDateString();
            $idtagihan = Carbon::now()->format('y') . '' . Carbon::now()->month . '' . $request->id_pelanggan;


            $tabelKwhmeter = new Kwhmeter;
            $tabelKwhmeter->bln_kwhmeter = $bulanini;
            $tabelKwhmeter->thn_kwhmeter = $tahunini;
            $tabelKwhmeter->meter_awal = $request->meter_awal;
            $tabelKwhmeter->meter_akhir = $request->meter_akhir;
            $tabelKwhmeter->tgl_catat = $tanggalskrg;
            $tabelKwhmeter->id_pelanggan = $request->id_pelanggan;
            $tabelKwhmeter->save();


            $getidkwh = Kwhmeter::select()->orderBy('id_kwhmeter', 'desc')->take(1)->get();
            foreach ($getidkwh as $value);
            $idkwhbaru = $value->id_kwhmeter;

            $getidtarif = Tarif::select()->orderBy('id_tarif', 'desc')->take(1)->get();
            foreach ($getidtarif as $value);
            $idtarifbaru = $value->id_tarif;

            $tabelTagihan = new Tagihan;
            $tabelTagihan->id_tagihan = $idtagihan;
            $tabelTagihan->bln_tagihan = $bulanini;
            $tabelTagihan->thn_tagihan = $tahunini;
            $tabelTagihan->jumlah_meter = $jumlahmeter;
            $tabelTagihan->lwbp = $jumlahlwbp;
            $tabelTagihan->wbp = $jumlahwbp;
            $tabelTagihan->pjudki = $jumlahpjudki;
            $tabelTagihan->pemeliharaan = $jumlahpemeliharaan;
            $tabelTagihan->materai = $materai;
            $tabelTagihan->status = 'Belum Bayar';
            $tabelTagihan->id_pelanggan = $request->id_pelanggan;
            $tabelTagihan->id_kwhmeter = $idkwhbaru;
            $tabelTagihan->id_tarif = $idtarifbaru;
            $tabelTagihan->save();

            return redirect('/dashboard/kwhmeter')->with('toast_success', 'Berhasil disimpan!');
        }
    }
}
