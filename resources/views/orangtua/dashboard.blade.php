@extends('layouts.app')

@section('title', 'Dashboard Orang Tua')

@section('content')

    <style>
        .wrapper {
            max-width: 1100px;
            margin: auto;
            padding: 25px;
        }

        /* TITLE */

        .page-title {
            text-align: center;
            font-weight: 700;
            margin-bottom: 40px;
            color: #2c3e50;
        }

        /* CARD */

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 35px;
        }

        .card-header {
            font-weight: 600;
            font-size: 16px;
            padding: 16px 20px;
            color: white;
        }

        /* HEADER COLORS */

        .header-biodata {
            background: #3498db;
        }

        .header-akun {
            background: #27ae60;
        }

        .header-riwayat {
            background: #f39c12;
        }

        .header-grafik {
            background: #8e44ad;
        }

        .card-body {
            padding: 28px 32px;
            background: white;
        }

        /* TABLE */

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #dcdcdc;
            padding: 14px 16px;
        }

        .table th {
            background: #f4f6f8;
            font-weight: 600;
            width: 250px;
        }

        /* RIWAYAT */

        .table-riwayat th {
            text-align: center;
            background: #eef3f7;
        }

        .table-riwayat td {
            text-align: center;
        }

        /* STATUS BADGE */

        .badge-status {
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
        }

        .status-normal {
            background: #d4edda;
            color: #1e7e34;
        }

        .status-stunting {
            background: #f8d7da;
            color: #a71d2a;
        }

        .status-risiko {
            background: #fff3cd;
            color: #856404;
        }

        /* CHART */

        canvas {
            max-height: 380px;
            margin-top: 10px;
        }

        /* RESPONSIVE */

        @media(max-width:768px) {

            .card-body {
                padding: 20px;
            }

            .table th {
                width: 160px;
                font-size: 14px;
            }

        }
    </style>

    <div class="wrapper">

        <h3 class="page-title">Dashboard Orang Tua</h3>

        @if($balita)

            <!-- BIODATA -->

            <div class="card">

                <div class="card-header header-biodata">
                    Biodata Anak
                </div>

                <div class="card-body">

                    <table class="table">

                        <tr>
                            <th>Nama</th>
                            <td>{{ $balita->nama }}</td>
                        </tr>

                        <tr>
                            <th>NIK</th>
                            <td>{{ $balita->nik }}</td>
                        </tr>

                        <tr>
                            <th>Tempat, Tanggal Lahir</th>
                            <td>
                                {{ $balita->tempat_lahir }},
                                {{ \Carbon\Carbon::parse($balita->tanggal_lahir)->format('d M Y') }}
                            </td>
                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $balita->jenis_kelamin }}</td>
                        </tr>

                        <tr>
                            <th>Nama Ibu</th>
                            <td>{{ $balita->nama_ibu }}</td>
                        </tr>

                        <tr>
                            <th>Status Kondisi</th>
                            <td>

                                @php
                                    $status = strtolower($balita->kondisi);
                                @endphp

                                @if($status == 'normal') <span class="badge-status status-normal">
                                    {{ $balita->kondisi }} </span>

                                @elseif($status == 'stunting') <span class="badge-status status-stunting">
                                    {{ $balita->kondisi }} </span>

                                @else <span class="badge-status status-risiko">
                                    {{ $balita->kondisi }} </span>
                                @endif

                            </td>
                        </tr>

                    </table>

                </div>

            </div>

            <!-- AKUN -->

            <div class="card">

                <div class="card-header header-akun">
                    Akun Orang Tua
                </div>

                <div class="card-body">

                    <table class="table">

                        <tr>
                            <th>Email</th>
                            <td>{{ $balita->user->email ?? '-' }}</td>
                        </tr>

                        <tr>
                            <th>Password Awal</th>
                            <td>Nama ibu saat pendaftaran</td>
                        </tr>

                    </table>

                </div>

            </div>

            <!-- RIWAYAT -->

            <div class="card">

                <div class="card-header header-riwayat">
                    Riwayat Penimbangan
                </div>

                <div class="card-body">

                    <table class="table table-riwayat">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>BB</th>
                                <th>TB</th>
                                <th>LILA</th>
                                <th>LIKA</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($balita->penimbangans as $p)

                                <tr>

                                    <td>{{ $loop->iteration }}</td>

                                    <td>{{ \Carbon\Carbon::parse($p->tanggal_penimbangan)->format('M Y') }}</td>

                                    <td>{{ $p->berat_badan }}</td>

                                    <td>{{ $p->tinggi_badan }}</td>

                                    <td>{{ $p->lila }}</td>

                                    <td>{{ $p->lika }}</td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="6">
                                        Belum ada data penimbangan
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

            <!-- GRAFIK -->

            <div class="card">

                <div class="card-header header-grafik">
                    Grafik Pertumbuhan
                </div>

                <div class="card-body">

                    <canvas id="chartBalita"></canvas>

                </div>

            </div>

        @else

            <div class="alert alert-warning text-center">
                Data balita belum tersedia
            </div>

        @endif

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

        const ctx = document.getElementById('chartBalita');

        if (ctx) {

            new Chart(ctx, {

                type: 'line',

                data: {

                    labels: [
                        @foreach($balita->penimbangans as $p)
                            "{{ \Carbon\Carbon::parse($p->tanggal_penimbangan)->format('M Y') }}",
                        @endforeach
        ],

                    datasets: [

                        {
                            label: 'Berat Badan',
                            data: [
                                @foreach($balita->penimbangans as $p)
                                    {{ $p->berat_badan }},
                                @endforeach
        ],
                            borderColor: '#3498db',
                            backgroundColor: 'transparent',
                            borderWidth: 3,
                            tension: 0.3
                        },

                        {
                            label: 'Tinggi Badan',
                            data: [
                                @foreach($balita->penimbangans as $p)
                                    {{ $p->tinggi_badan }},
                                @endforeach
        ],
                            borderColor: '#27ae60',
                            backgroundColor: 'transparent',
                            borderWidth: 3,
                            tension: 0.3
                        }

                    ]

                }

            });

        }

    </script>

@endsection