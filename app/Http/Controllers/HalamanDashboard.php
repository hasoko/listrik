<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanDashboard extends Controller
{
    public function index()
    // {
    //     return view('dashboard.index');
    // }
    {
        $data = [
            'halaman' => [
                'title' => 'Dashboard'
            ]

        ];
        return view('dashboard.index', $data);
    }
}
