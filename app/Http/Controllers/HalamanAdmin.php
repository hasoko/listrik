<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanAdmin extends Controller
{
    public function index()
    // {
    //     return view('admin.index');
    // }
       {
        $data = [
            'halaman' => [
                'title' => 'Dashboard'
            ]
        ];
        return view('admin.index', $data);
    }

    }
