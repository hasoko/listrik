<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Kwhmeter;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataKwhMeter extends Controller
{

    public function index()
    {
        // $cek = Kwhmeter::select('id_pelanggan', DB::raw('MAX(id_kwhmeter) as short_id_kwhmeter'))->groupBy('id_pelanggan')->get();
        // $cek = Kwhmeter::all();
        // dd($cek);
        $data = [

            'kwhmeter' => Kwhmeter::select('id_pelanggan',  DB::raw('MAX(id_kwhmeter) as short_id_kwhmeter'))->groupBy('id_pelanggan')->get(),
            'halaman' => [
                'title' => 'KWH Meter'
            ]
        ];
        return view('admin.kwhmeter.index', $data);
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
        return view('admin.kwhmeter.input', $data);
    }
}
