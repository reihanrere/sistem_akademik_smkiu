@extends('layouts.master')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-12">
            @if (session('sukses'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-text"><strong>Info!</strong> {{ session('sukses') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            @endif
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt--6">
      <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Detail Data Siswa</h3>
                </div>
                {{-- <div class="col-4 text-right">
                  <a href="/profileSiswa" class="btn btn-sm btn-primary">Back</a>
                </div> --}}  
              </div>
            </div>
            <div class="card-body">
              <form>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama Siswa</label>
                        <p>{{ $siswa->name }}</p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <p>{{ $siswa->email }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Jenis Kelamin</label>
                        <p>{{ $siswa->jenis_kelamin }}</p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">NIS</label>
                        <p>{{ $siswa->nis }}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Tempat Lahir</label>
                        <p>{{ $siswa->tempat_lahir }}</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Tanggal Lahir</label>
                        <p>{{ $siswa->tanggal_lahir }}</p>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Agama</label>
                        <p>{{ $siswa->agama }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Alamat</label>
                        <p>{{ $siswa->alamat }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@stop