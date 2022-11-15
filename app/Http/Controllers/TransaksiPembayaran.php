<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiPembayaran extends Controller
{
    public function index()
    {
        return view('admin.transaksipembayaran.index');
    }

    public function invoice()
    {
        return view('admin.transaksipembayaran.invoice');
    }
}
