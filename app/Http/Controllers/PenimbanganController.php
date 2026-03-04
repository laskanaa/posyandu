<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
{
    public function store(Request $request)
{
    Penimbangan::create($request->all());

    return back()->with('success','Data penimbangan ditambahkan');
}

public function update(Request $request, $id)
{
    $data = Penimbangan::findOrFail($id);
    $data->update($request->all());

    return back()->with('success','Data berhasil diupdate');
}

public function destroy($id)
{
    Penimbangan::destroy($id);

    return back()->with('success','Data berhasil dihapus');
}

}