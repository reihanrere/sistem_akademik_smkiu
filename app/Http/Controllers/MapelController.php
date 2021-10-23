<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = \App\Mapel::all();

        return view('mapel.index',compact('mapel'));
    }

    public function tambah()
    {
        $guru = \App\Guru::all();
        $kelas = \App\Kelas::all();

        return view('mapel.create',compact('guru','kelas'));
    }

    public function create(Request $request)
    {
        \App\Mapel::create($request->all());

        return redirect('/mapel')->with('sukses','Data berhasil ditambah');
    }

    public function ubah($id)
    {
        $mapel = \App\Mapel::find($id);
        $kelas = \App\Kelas::all();
        $guru = \App\Guru::all();

        return view('mapel.update',compact('mapel','kelas','guru'));
    }

    public function update(Request $request, $id)
    {
        $mapel = \App\Mapel::find($id);
        $mapel->update($request->all());
        $mapel->save();
    
        return redirect('/mapel')->with('sukses','Data berhasil diubah');
    }

    public function delete($id)
    {
        $mapel = \App\Mapel::find($id);
        $mapel->delete();

        return redirect('/mapel')->with('sukses','Data berhasil dihapus');
    }
}
