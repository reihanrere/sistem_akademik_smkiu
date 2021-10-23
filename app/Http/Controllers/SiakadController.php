<?php

namespace App\Http\Controllers;

use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use PDF;
use App\Siakad;
use Auth;
use App\Kelas;
class SiakadController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->role == 'admin' || Auth::user()->role == 'guru') {
            $siakads = Siakad::all();
            return view('siakad.index',compact('siakads'));
        } elseif(Auth::user()->role == 'siswa') {
            $rangkuman = Siakad::where('siswa_id', Auth::user()->nis)->get();
            return view('siakad.rangkuman_nilai',compact('rangkuman'));
        }
    }

    public function tambah()
    {
        $siswa = \App\Siswa::all();
        $user = \App\User::all();
        $mapel = \App\Mapel::all();
        $kelas = \App\Kelas::all();

        return view('siakad.create',compact('siswa','mapel','user','kelas'));
    }

    public function create(Request $request)
    {

        $siakad = \App\Siakad::create($request->all());
        return redirect('/siakad');
    }

    public function ubah($id)
    {
        $siakad = \App\Siakad::findOrFail($id);
        $siswa = \App\Siswa::all();
        $user = \App\User::all();
        $mapel = \App\Mapel::all();
        $kelas = \App\Kelas::all();

        return view('siakad.update',compact('siakad','mapel','siswa','user','kelas'));
    }

    public function update(Request $request, $id)
    {
        $siakad = \App\Siakad::findOrFail($id);
        $siakad->update($request->all());
        $siakad->save();
        
        return redirect('/siakad');
    }

    public function delete($id)
    {
        $siakad = \App\Siakad::findOrFail($id);
        $siakad->delete();

        return redirect('/siakad');
    }

    // public function rangkuman(Request $request)
    // {           
    //     $rangkuman = auth()->user()->siakad;
    //     $siswa = auth()->user()->siswa;

    //     return view('siakad.rangkuman_nilai',compact('rangkuman','siswa'));
    // }

    public function exportpdf()
    {
        $siakad = auth()->user()->siakad;
        $siswa = auth()->user()->siswa;
        $pdf = PDF::loadView('siakad.nilai-pdf', ['siakad' =>$siakad, 'siswa' =>$siswa]);
        return $pdf->download('nilai-siswa.pdf');
    }
}
