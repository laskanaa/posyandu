<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Balita;

class OrangtuaController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        $balita = Balita::with(['penimbangans' => function($q){
            $q->orderBy('tanggal_penimbangan','asc');
        }])->where('user_id', $user->id)->first();

        return view('orangtua.dashboard', compact('balita'));
    }
}