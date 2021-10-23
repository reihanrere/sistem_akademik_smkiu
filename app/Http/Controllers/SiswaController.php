<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SiswaController extends Controller
{
    public function index()
    {
        $siswa = \App\Siswa::all();

        return view('siswa.index',compact('siswa'));
    }

    public function tambah()
    {
        $kelas = \App\Kelas::all();
        return view('siswa.create',compact('kelas'));
    }
    public function create(Request $request)
    {
        $this->validate($request,[
            'nis' => 'required|unique:siswas',
            'email' => 'required|unique:users',
        ]);

        // insert ke table user
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_siswa;
        $user->email = $request->email;
        $user->nis = $request->nis;
        $user->password = bcrypt('123');
        $user->remember_token = str_random(60);
        $user->save();

        // insert ke table siswa
        $request->request->add(['user_id' => $user->id ]);
        $siswa = \App\Siswa::create($request->all());

        return redirect('/siswa');
    }

    public function ubah($nis)
    {
        $kelas = \App\Kelas::all();
        $siswa = \App\Siswa::findOrFail($nis);

        return view('siswa.update',compact('siswa','kelas'));
    }

    public function update(Request $request, $nis)
    {   
        $siswa = \App\Siswa::findOrFail($nis);
        $siswa->update($request->all());
        $siswa->save();

        $user = \App\User::findOrFail($siswa->user_id);
        $user->nis = $request->nis;
        $user->name = $request->nama_siswa;
        $user->email = $request->email;
        $user->save();

        return redirect('/siswa');
    }

    public function delete($nis)
    {
        $siswa = \App\Siswa::findOrFail($nis);
        $siswa->siakad()->delete();
        $siswa->delete();


        $user = \App\User::findOrFail($siswa->user_id);
        $user->delete();

        return redirect('/siswa');
    }

    public function profile($nis)
    {
        $siswa = \App\Siswa::find($nis);
        return view('siswa.profile',compact('siswa'));
    }

    public function detailProfile($nis)
    {
        $siswa = \App\Siswa::find($nis);
        return view('siswa.detail_profile',compact('siswa'));
    }

    public function profileSiswa()  
    {
        $siswa = \App\Siswa::where('nis', Auth::user()->nis)->first();
        $kelas = \App\Kelas::findOrFail($siswa->kelas_id);
        return view('siswa.profileSiswa',compact('siswa','kelas'));
    }

    public function detailProfileSiswa()
    {
        $siswa = auth()->user()->siswa;
        return view('siswa.detail_profileSiswa',compact('siswa'));
    }
}
