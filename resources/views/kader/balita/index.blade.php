<h2>Data Balita Stunting</h2>

<a href="{{ route('balita.create') }}">+ Tambah Balita</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Nama</th>
        <th>NIK</th>
        <th>Nama Ibu</th>
    </tr>

    @foreach($balitas as $balita)
        <tr>
            <td>{{ $balita->nama }}</td>
            <td>{{ $balita->nik }}</td>
            <td>{{ $balita->orangTua->nama_ibu }}</td>
        </tr>
    @endforeach
</table>