<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;

use RealRashid\SweetAlert\Facades\Alert;

class UnitController extends Controller
{
    public function index()
    {
        $data = [
            'unit' => Unit::all(),
            'halaman' => [
                'title' => 'Data Unit'
            ]
        ];
        return view('dashboard.dataunit.index', $data);
    }

    public function inputdataunit()
    {
        $data = [
            'halaman' => [
                'title' => 'Input Unit'
            ]
        ];
        return view('dashboard.dataunit.input', $data);
    }

    public function simpan(Request  $request)
    {
        $tabelUnit = new Unit;
        $tabelUnit->nama_unit = $request->nama_unit;
        $tabelUnit->prefix = $request->prefix;
        $tabelUnit->save();

        return redirect('/dashboard/dataunit')->with('toast_success', 'Berhasil disimpan!');
    }
}
