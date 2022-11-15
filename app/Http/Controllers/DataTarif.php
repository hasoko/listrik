<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTarif extends Controller
{
    public function index()
    {
        return view('admin.datatarif.index');
    }

    public function inputdatatarif()
    {
        return view('admin.datatarif.input');
    }
}
