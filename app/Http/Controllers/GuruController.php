<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = \App\Guru::all();

        return view('guru.index',compact('guru'));
    }

    public function tambah()
    {
        return view('guru.create');
    }

    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role = 'guru';
        $user->name = $request->nama_guru;
        $user->email = $request->email;
        $user->nip = $request->nip;
        $user->password = bcrypt('123');
        $user->remember_token = str_random(60);
        $user->save();

        // insert ke table siswa
        $request->request->add(['user_id' => $user->id ]);
        // $siswa = \App\Siswa::create($request->all());
        $guru = \App\Guru::create($request->all());

        return redirect('/guru')->with('sukses','Data berhasil ditambah');
    }

    public function ubah($id)
    {
        $guru = \App\Guru::find($id);

        return view('guru.update',compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = \App\Guru::find($id);
        $guru->update($request->all());
        $guru->save();

        $user = \App\User::findOrFail($guru->user_id);
        $user->name = $request->nama_guru;
        $user->email = $request->email;
        $user->save();

        return redirect('/guru')->with('sukses','Data berhasil diubah');
    }

    public function delete($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete();

        $user = \App\User::findOrFail($guru->user_id);
        $user->delete();

        return redirect('/guru')->with('sukses','Data berhasil dihapus');
    }
}
