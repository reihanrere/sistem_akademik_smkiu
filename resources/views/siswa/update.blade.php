@extends('layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
  <div class="pd-20 card-box mb-30">
    <div class="clearfix">
      <div class="pull-left">
        <h4 class="text-blue h4">Data Siswa</h4>
        <p class="mb-30">Silahkan input data siswa</p>
      </div>
    </div>
        <form method="POST" action="/siswa/update/{{ $siswa->nis }}">
          @csrf
          @method('PUT')
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="nama_siswa" value="{{ $siswa->nama_siswa }}" type="text" placeholder="Nama Siswa" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">NIS</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="nis" value="{{ $siswa->nis }}" placeholder="Nomor Induk Siswa" type="number" autocomplete="off" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Kelas</label>
            <div class="col-sm-12 col-md-10">
              <select class="custom-select col-12" name="kelas_id">
                <option value="{{ $siswa->kelas->id }}">{{ $siswa->kelas->kelas }}<option>
                @foreach ($kelas as $kelas)
                <option value="{{ $kelas->id }}">{{ $kelas->kelas }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Agama</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="agama" value="{{ $siswa->agama }}" type="text" placeholder="Agama" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">TTL</label>
            <div class="col-md-2">
              <input class="form-control" name="tempat_lahir"type="text" value="{{ $siswa->tempat_lahir }}" placeholder="Tempat Lahir" autocomplete="off">
            </div>
            <div class="col-md-8">
              <input class="form-control date-picker" name="tanggal_lahir" value="{{ $siswa->tempat_lahir }}" placeholder="Tanggal Lahir" type="text" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-12 col-md-10">
              <select class="custom-select col-12" name="jenis_kelamin">
                <option selected="">{{ $siswa->jenis_kelamin }}<option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="email" value="{{ $siswa->email }}" placeholder="xxxxxx@gmail.com" type="email" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="no_telp" value="{{ $siswa->no_telp }}" placeholder="0813xxxxxx" type="text" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Tahun Awal Sekolah</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="tahunawal_sekolah" value="{{ $siswa->tahunawal_sekolah }}" type="text" placeholder="Tahun Awal Sekolah" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label>Textarea</label>
            <textarea class="form-control" name="alamat">{{ $siswa->alamat }}</textarea>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@stop