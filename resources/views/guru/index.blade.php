@extends('layouts.master')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
  <div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
      <div class="pull-left">
        <h4 class="text-blue h4">Data Guru</h4>
      </div>
      <div class="pull-right">
        <a href="/guru/tambah" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i>Tambah Data</a>
      </div>  
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">No telp</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($guru as $guru)
            <tr>
               <td>
                <div class="dropdown">
                  <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="dw dw-more"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                    <a class="dropdown-item" href="/guru/ubah/{{ $guru->id }}"><i class="dw dw-edit2"></i> Edit</a>
                    <a class="dropdown-item" href="/guru/delete/{{ $guru->id }}"><i class="dw dw-delete-3"></i> Delete</a>
                  </div>
                </div>
              </td>
              <td>{{ $guru->nip }}</td>
              <td>{{ $guru->nama_guru }}</td>
              <td>{{ $guru->no_telp }}</td>
              <td>{{ $guru->email }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>			
</div>
@stop