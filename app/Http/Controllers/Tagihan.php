<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tagihan extends Controller
{
    public function index()
    {
        $data =
            [
                'halaman' =>
                [
                    'title' => 'Tagihan'
                ]
            ];
        return view('dashboard.tagihan.index', $data);
    }
}
