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

class KwhMeterController extends Controller
{

    public function index()
    {
        // $cek = Kwhmeter::select('id_pelanggan', DB::raw('MAX(id_kwhmeter) as short_id_kwhmeter'))->groupBy('id_pelanggan')->get();
        // $cek = Kwhmeter::all();
        // dd($cek);
        $data = [
            'kwhmeter' => Kwhmeter::whereRaw('id_kwhmeter in (select max(id_kwhmeter) from kwhmeter group by (id_pelanggan))')->get(),

            // 'kwhmeter' => Kwhmeter::select('id_kwhmeter','id_pelanggan','bulan','tahun','tanggal_catat',  DB::raw('MAX(id_kwhmeter) as short_id_kwhmeter'))->groupBy('id_pelanggan')->get(),
            'halaman' => [
                'title' => 'KWH Meter'
            ]
        ];
        // dd($data);
        return view('dashboard.kwhmeter.index', $data);
    }

    public function inputkwh($id)
    {

        // echo Kwhmeter::where('id_pelanggan', $id)->orderBy('tanggal_catat', 'desc')->first();

        $data = [
            'kwhmeter' => Kwhmeter::where('id_pelanggan', $id)->orderBy('tanggal_catat', 'desc')->first(),
            'halaman' => [
                'title' => 'Input KWH'
            ]
        ];
        // dd($data);
        return view('dashboard.kwhmeter.input', $data);
    }

    public function simpan(Request $request)

    {

        // dd($request);
        $meter = $request->meter_akhir - $request->meter_awal;
        $jumlahmeter = $request->faktor_meter * $meter;

        // $idtagihan = Carbon::now()->format('y') .''. Carbon::now()->month .''.$request->id_pelanggan;
        $lwbp = Tarif::where('id_tarif', 'lwbp')->get();
        foreach ($lwbp as $value);
        $tariflwbp = $value->tarifperkwh;

        $wbp = Tarif::where('id_tarif', 'wbp')->get();
        foreach ($wbp as $value);
        $tarifwbp = $value->tarifperkwh;

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

        // echo $idtagihan;

        if ($request->meter_akhir <= $request->meter_awal) {
            echo "gagal";
        } else {

            $bulanini = Carbon::now()->month;
            $tahunini = Carbon::now()->year;
            $tanggalskrg = Carbon::now()->toDateString();
            $idtagihan = Carbon::now()->format('y') . '' . Carbon::now()->month . '' . $request->id_pelanggan;



            $tabelKwhmeter = new Kwhmeter;
            $tabelKwhmeter->bulan = $bulanini;
            $tabelKwhmeter->tahun = $tahunini;
            $tabelKwhmeter->meter_awal = $request->meter_awal;
            $tabelKwhmeter->meter_akhir = $request->meter_akhir;
            $tabelKwhmeter->tanggal_catat = $tanggalskrg;
            $tabelKwhmeter->id_pelanggan = $request->id_pelanggan;
            $tabelKwhmeter->save();


            $getidkwh = Kwhmeter::select()->orderBy('id_kwhmeter', 'desc')->take(1)->get();
            foreach ($getidkwh as $value);
            $idkwhbaru = $value->id_kwhmeter;

            $tabelTagihan = new Tagihan;
            $tabelTagihan->id_tagihan = $idtagihan;
            $tabelTagihan->bulan = $bulanini;
            $tabelTagihan->tahun = $tahunini;
            $tabelTagihan->jumlah_meter = $jumlahmeter;
            $tabelTagihan->lwbp = $jumlahlwbp;
            $tabelTagihan->wbp = $jumlahwbp;
            $tabelTagihan->pjudki = $jumlahpjudki;
            $tabelTagihan->pemeliharaan = $jumlahpemeliharaan;
            $tabelTagihan->materai = $materai;
            $tabelTagihan->status = 'Belum Bayar';
            $tabelTagihan->id_pelanggan = $request->id_pelanggan;
            $tabelTagihan->id_kwhmeter = $idkwhbaru;
            $tabelTagihan->save();







            return redirect('/dashboard/kwhmeter');
        }



        ///////////////


        // membuat ID Pelanggan
        // if (Pelanggan::where('id_unit', $request->id_unit)->count() > 0) {
        //     $prefixid = Pelanggan::where('id_unit', $request->id_unit)->orderBy('id_pelanggan', 'desc')->take(1)->get();
        //     foreach ($prefixid as $value);
        //     $idbaru = $value->id_pelanggan + 1;
        // } else {
        //     $prefixid = Unit::where('id_unit', $request->id_unit)->take(1)->get();
        //     foreach ($prefixid as $unit);
        //     $idbaru = $unit->prefix . '' . '0001';
        // }
        // echo $prefixid;
        // echo Carbon::now()->month;
        // echo Carbon::now()->year;
        // echo Carbon::now()->toDateString();

        // $tabelPelanggan = new Pelanggan;
        // $tabelPelanggan->id_pelanggan = $idbaru;
        // $tabelPelanggan->faktor_meter = $request->faktor_meter;
        // $tabelPelanggan->nama = $request->nama;
        // $tabelPelanggan->npwp = $request->npwp;
        // $tabelPelanggan->telepon = $request->telepon;
        // $tabelPelanggan->id_unit = $request->id_unit;
        // $tabelPelanggan->save();

        // $bulanini = Carbon::now()->month;
        // $tahunini = Carbon::now()->year;
        // $tanggalskrg = Carbon::now()->toDateString();

        // $tabelKwhmeter = new Kwhmeter;
        // $tabelKwhmeter->bulan = $bulanini;
        // $tabelKwhmeter->tahun = $tahunini;
        // $tabelKwhmeter->meter_awal = 0;
        // $tabelKwhmeter->meter_akhir = $request->meter_dipasang;
        // $tabelKwhmeter->tanggal_catat = $tanggalskrg;
        // $tabelKwhmeter->id_pelanggan = $idbaru;
        // $tabelKwhmeter->save();

        // return redirect('/dashboard/datapelanggan');
    }
}
