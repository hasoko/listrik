<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'halaman' => [
                'title' => 'Profil'
            ]
        ];
        return view('dashboard.profil.index', $data);
    }
    public function simpanubah(Request $request, $id)
    {

        $tabelPelanggan = Pelanggan::findOrFail($id);
        $tabelPelanggan->npwp = $request->npwp;
        $tabelPelanggan->telepon = $request->telepon;
        $tabelPelanggan->save();

        return redirect('/dashboard/profil')->with('toast_success', 'Berhasil disimpan!');
    }
    public function gantipassword(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'current-password' => 'required',
                'new-password' => 'required',
                'new-password-confirm' => 'required',
            ],

        );

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with('toast_error', 'salah memasukkan password');
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with('toast_error', 'Password baru pernah digunakan');
        }
        if (!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0) {
            //New password and confirm password are not same
            return redirect()->back()->with('toast_error', 'Password Baru Harus sama dengan password konfirmasi. Silahkan masukan ulang password anda');
        }
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with('toast_success', 'Password Berhasil dirubah');
    }
}
