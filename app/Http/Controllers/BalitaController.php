<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OrangTua;
use App\Models\Balita;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class BalitaController extends Controller
{
    public function index()
    {
        $balitas = Balita::with('orangTua')->get();
        return view('kader.balita.index', compact('balitas'));
    }

    public function create()
    {
        return view('kader.balita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:balitas',
            'nama_balita' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nama_ibu' => 'required',
            'no_hp' => 'required'
        ]);

        $user = User::create([
            'name' => $request->nama_ibu,
            'email' => $request->nik . '@ortu.com',
            'password' => Hash::make($request->nik),
            'role' => 'orang_tua'
        ]);

        $orangTua = OrangTua::create([
            'user_id' => $user->id,
            'nama_ibu' => $request->nama_ibu,
            'no_hp' => $request->no_hp
        ]);

        Balita::create([
            'orang_tua_id' => $orangTua->id,
            'nik' => $request->nik,
            'nama' => $request->nama_balita,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_mulai_monitoring' => now()
        ]);

        return redirect()->route('balita.index')
            ->with('success', 'Balita dan akun orang tua berhasil dibuat');
    }
}