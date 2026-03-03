<h2>Tambah Balita Stunting</h2>

<form action="{{ route('balita.store') }}" method="POST">
    @csrf

    <input type="text" name="nik" placeholder="NIK Balita"><br>
    <input type="text" name="nama_balita" placeholder="Nama Balita"><br>
    <input type="date" name="tanggal_lahir"><br>

    <select name="jenis_kelamin">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>

    <input type="text" name="nama_ibu" placeholder="Nama Ibu"><br>
    <input type="text" name="no_hp" placeholder="No HP"><br>

    <button type="submit">Simpan</button>
</form>