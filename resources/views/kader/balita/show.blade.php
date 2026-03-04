@extends('layouts.app')

@section('title','Detail Balita')

@section('content')

<div class="container mt-4">

    <h3>Detail Data Balita</h3>
    <hr>

    <div class="card p-3 mb-4">
        <h5>Biodata</h5>
        <p><b>Nama:</b> {{ $balita->nama }}</p>
        <p><b>NIK:</b> {{ $balita->nik }}</p>
        <p><b>TTL:</b> {{ $balita->tempat_lahir }},
            {{ \Carbon\Carbon::parse($balita->tanggal_lahir)->format('d M Y') }}
        </p>
        <p><b>Jenis Kelamin:</b> {{ $balita->jenis_kelamin }}</p>
        <p><b>Nama Ibu:</b> {{ $balita->nama_ibu }}</p>
        <p><b>Kondisi:</b>
            <span style="font-weight:bold; color:red;">
                {{ $balita->kondisi }}
            </span>
        </p>
    </div>

    <div class="card p-3 mb-4">
        <h5>Akun Orang Tua</h5>
        <p><b>Username:</b> {{ $balita->user->username }}</p>
        <p><b>Password:</b> (password = nama ibu saat didaftarkan)</p>
    </div>

    <div class="card p-3 mb-4">
        <h5>Riwayat Penimbangan</h5>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>BB</th>
                    <th>TB</th>
                    <th>LILA</th>
                    <th>LIKA</th>
                </tr>
            </thead>
            <tbody>
                @foreach($balita->penimbangans as $p)
                <tr>
                    <td>{{ $p->tanggal_penimbangan }}</td>
                    <td>{{ $p->berat_badan }} kg</td>
                    <td>{{ $p->tinggi_badan }} cm</td>
                    <td>{{ $p->lila }} cm</td>
                    <td>{{ $p->lika }} cm</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card p-3">
        <h5>Grafik KMS</h5>
        <canvas id="kmsChart"></canvas>
    </div>

</div>

{{-- CHART.JS CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('kmsChart');

const chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            @foreach($balita->penimbangans as $p)
                "{{ $p->tanggal_penimbangan }}",
            @endforeach
        ],
        datasets: [{
            label: 'Tinggi Badan',
            data: [
                @foreach($balita->penimbangans as $p)
                    {{ $p->tinggi_badan }},
                @endforeach
            ],
            borderWidth: 2
        }]
    },
});
</script>

@endsection