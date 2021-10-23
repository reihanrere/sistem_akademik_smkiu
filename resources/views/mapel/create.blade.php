@extends('layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
  <div class="pd-20 card-box mb-30">
    <div class="clearfix">
      <div class="pull-left">
        <h4 class="text-blue h4">Mata Pelajaran</h4>
        <p class="mb-30">Silahkan input data mata pelajaran</p>
      </div>
    </div>
        <form method="POST" action="/mapel/create">
          @csrf
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label" for="input-text">Mapel</label>
            <div class="col-sm-12 col-md-10">
              <input type="text" name="nama_mapel" id="input-text" class="form-control" placeholder="Mata Pelajaran" required>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Semester</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="semester"type="text" placeholder="Semester" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Guru</label>
            <div class="col-sm-12 col-md-10">
              <select class="custom-select col-12" name="guru_id">
                <option selected="">Pilih Guru<option>
                @foreach ($guru as $guru)
                <option value="{{ $guru->id }}">{{ $guru->nama_guru }}</option>
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
            <label class="col-sm-12 col-md-2 col-form-label">KKM</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="kkm" placeholder="KKM nilai" type="number" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi"></textarea>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@stop