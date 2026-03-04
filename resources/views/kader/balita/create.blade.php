@extends('layouts.app')

@section('title', 'Tambah Balita')

@section('content')
    <div class="dashboard-container">

        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Kader</h2>
            <ul>
                <li><a href="{{ route('dashboard.kader') }}">Dashboard</a></li>
                <li class="active"><a href="{{ route('balita.index') }}">Data Balita</a></li>
                <li>Data Orang Tua</li>
                <li>Slider</li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="topbar">
                <h3>Tambah Data Balita</h3>
            </div>

            <div class="table-container">
                <form action="{{ route('balita.store') }}" method="POST">
                    @csrf

                    <label>Nama Balita</label>
                    <input type="text" name="nama" class="form-control" required>

                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" required>

                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" required>

                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>

                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>

                    <label>Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" required>

                    <hr>

                    <h5>Penimbangan Pertama</h5>

                    <label>Berat Badan (kg)</label>
                    <input type="number" step="0.1" name="berat_badan" class="form-control" required>

                    <label>Tinggi Badan (cm)</label>
                    <input type="number" step="0.1" name="tinggi_badan" class="form-control" required>

                    <label>LILA (cm)</label>
                    <input type="number" step="0.1" name="lila" class="form-control" required>

                    <label>LIKA (cm)</label>
                    <input type="number" step="0.1" name="lika" class="form-control" required>

                    <br>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection