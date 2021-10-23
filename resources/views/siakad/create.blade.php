@extends('layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
  <div class="pd-20 card-box mb-30">
    <div class="clearfix">
      <div class="pull-left">
        <h4 class="text-blue h4">Rangkuman Nilai</h4>
        <p class="mb-30">Silahkan input data rangkuman nilai</p>
      </div>
    </div>
        <form method="POST" action="/siakad/create">
          @csrf
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Nama Siswa</label>
            <div class="col-sm-12 col-md-10">
              <select class="custom-select col-12" name="siswa_id">
                <option selected="">Pilih Nama<option>
                @foreach ($siswa as $siswa)
                <option value="{{ $siswa->nis }}">{{ $siswa->nama_siswa }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Mapel</label>
            <div class="col-sm-12 col-md-10">
              <select class="custom-select col-12" name="mapel_id">
                <option selected="">Pilih Mapel<option>
                @foreach ($mapel as $mapel)
                <option value="{{ $mapel->id }}">{{ $mapel->nama_mapel }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Kelas</label>
            <div class="col-sm-12 col-md-10">
              <select class="custom-select col-12" name="kelas_id">
                <option selected="">Pilih Kelas<option>
                @foreach ($kelas as $kelas)
                <option value="{{ $kelas->id }}">{{ $kelas->kelas }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Nilai Keterampilan</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="nilai_keterampilan" type="text" placeholder="Nilai Keterampilan" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Nilai Pengetahuan</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="nilai_pengetahuan" type="text" placeholder="Nilai Pengetahuan" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Tahun Pelajaran</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="tahun_pelajaran" type="text" placeholder="Tahun Pelajaran" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Jenjang</label>
            <div class="col-sm-12 col-md-10">
              <select class="custom-select col-12" name="jenjang">
                <option value="">Pilih jenjang<option>
                <option value="UKK">UKK</option>
                <option value="PTS Genap">PTS Genap</option>
                <option value="PAS Genap">PAS Genap</option>
                <option value="PTS Ganjil">PTS Ganjil</option>
                <option value="PAS Ganjil">PAS Ganjil</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@stop