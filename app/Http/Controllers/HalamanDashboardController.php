<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class HalamanDashboardController extends Controller
{
    public function index()
    // {
    //     return view('dashboard.index');
    // }
    {
        $data = [
            'informasi' => Informasi::all(),
            'halaman' => [
                'title' => 'Dashboard'
            ]

        ];
        return view('dashboard.index', $data);
    }
}
