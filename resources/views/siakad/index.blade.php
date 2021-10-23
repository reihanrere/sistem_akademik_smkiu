@extends('layouts.master')

@section('content')
@push('css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
@endpush
<div class="pd-ltr-20 xs-pd-20-10">
            <div class="card-box mb-30">
              <div class="pd-20">
                <h4 class="text-blue h4">Rangkuman Nilai Siswa</h4> <a href="/siakad/tambah" class="btn btn-sm btn-outline-primary"><i class="fa fa-plus"></i>Tambah Data</a>
              </div>
              <div class="pb-20">
                <table class="table" id="table_index">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Nama</th>
                      <th>Mapel</th>
                      <th>Kelas</th>
                      <th>Nilai Keterampilan</th>
                      <th>Nilai Pengetahuan</th>
                      <th>Jenjang</th>
                      <th>Tahun Pelajaran</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($siakads as $siakad)
                    <tr>
                      <td>
                        <div class="dropdown">
                          <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            <i class="dw dw-more"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                            <a class="dropdown-item" href="/siakad/Profile/{{ $siakad->id }}"><i class="dw dw-eye"></i> View</a>
                            <a class="dropdown-item" href="/siakad/ubah/{{ $siakad->id }}"><i class="dw dw-edit2"></i> Edit</a>
                            <a class="dropdown-item" href="/siakad/delete/{{ $siakad->id }}"><i class="dw dw-delete-3"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                      <td>{{ $siakad->siswa->nama_siswa }}</td>
                      <td>{{ $siakad->mapel->nama_mapel }}</td>
                      <td>{{ $siakad->kelas->kelas }}</td>
                      <td>{{ $siakad->nilai_keterampilan }}</td>
                      <td>{{ $siakad->nilai_pengetahuan }}</td>
                      <td>{{ $siakad->jenjang }}</td>
                      <td>{{ $siakad->tahun_pelajaran }}</td>
                    </tr>
                    @endforeach  
                  </tbody>
                </table>
              </div>
            </div>
</div>
@push('script')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function(){
    $('#table_index').DataTable({
      dom: 'Bfrtp',
      buttons: [
        {
                  extend: 'pdfHtml5',
                  exportOptions: {
                      columns: [ 1, 2, 3, 4, 5, 6 ]
                  }
              },
        {
                  extend: 'print',
                  exportOptions: {
                      columns: [ 1, 2, 3, 4, 5, 6 ]
                  }
              },

        {
                  extend: 'excel',
                  exportOptions: {
                      columns: [ 1, 2, 3, 4, 5, 6 ]
                  }
              },
      ]
    });
  });
</script>    
@endpush
@stop