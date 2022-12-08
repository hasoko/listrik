<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDaya extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Data Daya'
            ]
        ];
        return view('admin.datadaya.index', $data);
    }

    public function inputdatadaya()
    {
        $data = [
            'halaman' => [
                'title' => 'Input Daya'
            ]
        ];
        return view('admin.datadaya.input', $data);
    }
}
