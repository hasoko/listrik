<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }
}