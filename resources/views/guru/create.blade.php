@extends('layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
  <div class="pd-20 card-box mb-30">
    <div class="clearfix">
      <div class="pull-left">
        <h4 class="text-blue h4">Data Guru</h4>
        <p class="mb-30">Silahkan input data guru</p>
      </div>
    </div>
        <form method="POST" action="/guru/create">
          @csrf
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">NIP</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="nip" placeholder="Nomor Induk Pegawai" type="number" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="nama_guru"type="text" placeholder="Nama Guru" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="email" placeholder="xxxxxx@gmail.com" type="email" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
            <div class="col-sm-12 col-md-10">
              <input class="form-control" name="no_telp" placeholder="0813xxxxxx" type="text" autocomplete="off">
            </div>
          </div>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@stop