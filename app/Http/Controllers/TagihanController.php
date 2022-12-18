<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
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
