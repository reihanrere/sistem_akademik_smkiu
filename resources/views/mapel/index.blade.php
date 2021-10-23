@extends('layouts.master')

@section('content')

<div class="pd-ltr-20 xs-pd-20-10">
  <div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
      <div class="pull-left">
        <h4 class="text-blue h4">Mata Pelajaran</h4>
      </div>
      <div class="pull-right">
        <a href="/mapel/tambah" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i>Tambah Data</a>
      </div>  
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></a></th>
            <th scope="col">Mapel</th>
            <th scope="col">Semester</th>
            <th scope="col">Guru</th>
            <th scope="col">Kelas</th>
            <th scope="col">KKM</th>
            <th scope="col">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mapel as $mapel)
            <tr>
               <td>
                <div class="dropdown">
                  <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    <i class="dw dw-more"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                    <a class="dropdown-item" href="/mapel/ubah/{{ $mapel->id }}"><i class="dw dw-edit2"></i> Edit</a>
                    <a class="dropdown-item" href="/mapel/delete/{{ $mapel->id }}"><i class="dw dw-delete-3"></i> Delete</a>
                  </div>
                </div>
              </td>
              <td>{{ $mapel->nama_mapel }}</td>
              <td>{{ $mapel->semester }}</td>
              <td>{{ $mapel->guru->nama_guru }}</td>
              <td>{{ $mapel->kelas->kelas }}</td>
              <td>{{ $mapel->kkm }}</td>
              <td>{{ $mapel->deskripsi }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>			
</div>
@stop