<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Kader\DashboardController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard/kader', function () {
        return view('kader.dashboard');
    })->name('dashboard.kader');

    // HALAMAN DATA BALITA
    Route::get('/kader/balita', [BalitaController::class, 'index'])->name('balita.index');

    // FORM TAMBAH
    Route::get('/kader/balita/create', [BalitaController::class, 'create'])->name('balita.create');

    // SIMPAN
    Route::post('/kader/balita/store', [BalitaController::class, 'store'])->name('balita.store');

});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function (Request $request) {
    return redirect('/dashboard/kader');
});

Route::get('/dashboard/kader', function () {
    return view('kader.dashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/kader/balita/create', [BalitaController::class, 'create'])->name('balita.create');
    Route::post('/kader/balita/store', [BalitaController::class, 'store'])->name('balita.store');

});

Route::get('/dashboard/kader', [DashboardController::class, 'index']);

Route::get('/', function () {
    return view('pages.home');

});