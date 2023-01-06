<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\Tarif;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

use Carbon\Carbon;

use RealRashid\SweetAlert\Facades\Alert;

class TransaksiPembayaranController extends Controller
{
    public function index()
    {
        $data = [

            'tagihan' => Tagihan::all(),
            'halaman' => [
                'title' => 'Transaksi'
            ]
        ];
        return view('dashboard.transaksipembayaran.index', $data);
    }

    public function invoice($id)
    {
        $data = [
            'tagihan' => Tagihan::findOrFail($id),
            'lwbp' => Tarif::where('kode_tarif', 'lwbp')->take(1)->get(),
            'wbp' => Tarif::where('Kode_tarif', 'wbp')->get(),
            'halaman' => [
                'title' => 'Invoice'
            ]
        ];

        // dd($data);
        return view('dashboard.transaksipembayaran.invoice', $data);
    }

    public function cetak($id)
    {
        $data = [
            'tagihan' => Tagihan::findOrFail($id),
            // 'lwbp' => Tarif::where('kode_tarif', 'lwbp')->take(1)->get(),
            // 'wbp' => Tarif::where('Kode_tarif', 'wbp')->get(),
            'tarif' => Tarif::select()->orderBy('id_tarif', 'desc')->take(1)->get(),
            'halaman' => [
                'title' => 'Invoice'
            ]
        ];

        // dd($data);
        return view('dashboard.transaksipembayaran.cetak', $data);
    }

    public function bayar(Request $request, $id)
    {

        // dd($request);

        $tanggalskrg = Carbon::now()->toDateString();
        $waktu = Carbon::now();

        $tabelTagihan = Tagihan::findOrFail($id);
        $tabelTagihan->status = "Sudah Bayar";
        $tabelTagihan->save();


        // $idpembayaran = $id .''. $request->id_kwhmeter;

        $tabelPembayaran = new Pembayaran;
        $tabelPembayaran->id_pembayaran = $waktu->year . '' . $waktu->month . '' . $waktu->day . '' . $request->id_kwhmeter;
        $tabelPembayaran->tgl_bayar = $tanggalskrg;
        $tabelPembayaran->total_bayar = $request->total_bayar;
        $tabelPembayaran->id_tagihan = $id;
        $tabelPembayaran->id_pelanggan = $request->id_pelanggan;
        $tabelPembayaran->id_kwhmeter = $request->id_kwhmeter;
        $tabelPembayaran->id_user = 1;
        $tabelPembayaran->save();



        // $tabelTagihan->faktor_meter = $request->faktor_meter;
        // $tabelPelanggan->nama = $request->nama;
        // $tabelPelanggan->npwp = $request->npwp;
        // $tabelPelanggan->telepon = $request->telepon;
        // $tabelPelanggan->id_unit = $request->id_unit;
        // $tabelPelanggan->save();

        return redirect('/dashboard/transaksipembayaran')->with('toast_success', 'Berhasil dibayar!');
    }
}
