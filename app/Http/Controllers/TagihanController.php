<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagihanController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->$tagihan->$id_tagihan);
        $data =
            [
                'tagihan' => Tagihan::where('id_pelanggan', Auth::user()->id_pelanggan)->get(),
                'halaman' =>
                [
                    'title' => 'Tagihan'
                ]
            ];
        // dd($data);
        return view('dashboard.tagihan.index', $data);
    }

    public function detail($id)
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
        return view('dashboard.tagihan.detail', $data);
    }
}
