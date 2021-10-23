@extends('layouts.master')

@section('content')
<div class="pd-ltr-20 xs-pd-20-10">
  <div class="pd-20 card-box mb-30">
    <div class="clearfix mb-20">
      <div class="pull-left">
        <h4 class="text-blue h4">Data Siswa</h4>
      </div>
      <div class="pull-right">
        <a href="/siswa/tambah" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i>Tambah Data</a>
      </div>  
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col"></a></th>
            <th scope="col">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($siswa as $siswa)
            <tr>
              <td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
										<a class="dropdown-item" href="/siswa/Profile/{{ $siswa->nis }}"><i class="dw dw-eye"></i> Details</a>
										<a class="dropdown-item" href="/siswa/ubah/{{ $siswa->nis }}"><i class="dw dw-edit2"></i> Edit</a>
										<a class="dropdown-item" href="/siswa/delete/{{ $siswa->nis }}"><i class="dw dw-delete-3"></i> Delete</a>
									</div>
								</div>
							</td>
              <td>{{ $siswa->nis }}</td>
              <td>{{ $siswa->nama_siswa }}</td>
              <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>			
</div>
@stop