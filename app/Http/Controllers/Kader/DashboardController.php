<?php

namespace App\Http\Controllers\Kader;

use App\Http\Controllers\Controller;
use App\Models\Balita;
use App\Models\OrangTua;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBalita = Balita::count();
        $totalOrangTua = OrangTua::count();
        $totalStunting = Balita::where('status', 'stunting')->count();

        return view('kader.dashboard', compact(
            'totalBalita',
            'totalOrangTua',
            'totalStunting'
        ));
    }
}