<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Informasi extends Controller
{
    public function index()
    {
        return view('admin.informasi.index');
    }

    public function inputinformasi()
    {
        return view('admin.informasi.input');
    }
}
