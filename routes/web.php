<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Kader\DashboardController;

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


Route::get('/dashboard/kader', [DashboardController::class, 'index']);

Route::get('/', function () {
    return view('pages.home');

});