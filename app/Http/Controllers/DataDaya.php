<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDaya extends Controller
{
    public function index()
    {
        return view('admin.datadaya.index');
    }

    public function inputdatadaya()
    {
        return view('admin.datadaya.input');
    }
}
