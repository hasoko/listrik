<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index()
    {
        $data =
            [
                'tagihan' => Tagihan::all(),
                'halaman' =>
                [
                    'title' => 'Tagihan'
                ]
            ];
        return view('dashboard.tagihan.index', $data);
    }
}
