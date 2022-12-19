<?php

namespace App\Http\Controllers;

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
}
