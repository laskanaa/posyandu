<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Balita;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use App\Models\StandarWhoTbu;
use Carbon\Carbon;

class BalitaController extends Controller
{
    // Tampilkan daftar balita
    public function index()
    {
        $balitas = Balita::all();
        return view('kader.balita.index', compact('balitas'));
    }

    // Tampilkan form tambah balita
    public function create()
    {
        return view('kader.balita.create');
    }

    // ✅ SATU STORE SAJA (DIGABUNG)
   public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nik' => 'required|unique:balitas',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required|date',
        'nama_ibu' => 'required',
        'jenis_kelamin' => 'required',
        'berat_badan' => 'required|numeric',
        'tinggi_badan' => 'required|numeric',
        'lila' => 'required|numeric',
        'lika' => 'required|numeric',
    ]);

    // 1️⃣ Hitung umur bulan
    $tanggalLahir = Carbon::parse($request->tanggal_lahir);
    $umurBulan = $tanggalLahir->diffInMonths(Carbon::now());

    // 2️⃣ Ambil standar WHO
    // $standar = StandarWhoTbu::where('jenis_kelamin', $request->jenis_kelamin)
       //         ->where('umur_bulan', $umurBulan)
         //       ->first();

//    $tb = $request->tinggi_badan;

    // 3️⃣ Tentukan kondisi (aman walau WHO kosong)
    if ($standar) {
        if ($tb < $standar->minus_3sd) {
            $kondisi = 'Stunting Berat';
        } elseif ($tb < $standar->minus_2sd) {
            $kondisi = 'Stunting';
        } elseif ($tb <= $standar->plus_2sd) {
            $kondisi = 'Normal';
        } else {
            $kondisi = 'Tinggi';
        }
    } else {
        $kondisi = 'Belum dihitung';
    }

    // 4️⃣ Buat akun orang tua
    $user = User::create([
        'name' => $request->nama_ibu,
        'username' => $request->nik,
        'password' => Hash::make($request->nama_ibu),
        'role' => 'orang_tua'
    ]);

    // 5️⃣ Simpan balita
    $balita = Balita::create([
        'nama' => $request->nama,
        'nik' => $request->nik,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'nama_ibu' => $request->nama_ibu,
        'jenis_kelamin' => $request->jenis_kelamin,
        'kondisi' => $kondisi,
        'user_id' => $user->id
    ]);

    // 6️⃣ Simpan penimbangan pertama
    $balita->penimbangans()->create([
        'tanggal_penimbangan' => now(),
        'berat_badan' => $request->berat_badan,
        'tinggi_badan' => $request->tinggi_badan,
        'lila' => $request->lila,
        'lika' => $request->lika,
    ]);

    return redirect()->route('balita.index')
                     ->with('success','Data berhasil ditambahkan');
}
    // Tampilkan detail balita
public function show($id)
{
    $balita = Balita::with('penimbangans','user')->findOrFail($id);

    return view('kader.balita.show', compact('balita'));
}
}