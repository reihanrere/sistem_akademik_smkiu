<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>MyAcademy</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/vendors/images/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/vendors/images/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/vendors/images/favicon-16x16.png') }}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/icon-font.min.css') }}">
  <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.css" rel="stylesheet" type="text/css">
	{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css"> --}}
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/styles/style.css') }}">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="sidebar-light">
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{ asset('admin/vendors/images/logo-icon.png') }}" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	@include('layouts.includes._topbar')

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>
  @include('layouts.includes._sidebar');
	<div class="mobile-menu-overlay"></div>
	<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
      @if (session('sukses'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-text"><strong>Info!</strong> {{ session('sukses') }}</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                @endif
                <div class="card-box mb-30">
                  <div class="pd-20">
                    <h4 class="text-blue h4">Rangkuman Nilai Siswa</h4>
                    <hr>
                    <div class="mb-0">
                      <div class="form-group row">
                        <div class="col-sm-3" id="filter">
                          
                        </div>
                        <div class="col-sm-1" id="button">

                        </div>
                      </div>
                    </div>
                    <hr>
                      <div class="mb-0">
                        NISN  : {{ Auth::user()->nis }} <br>
                        Nama  : {{ Auth::user()->name }} <br>
                      </div>
                    <hr>
                  </div>
                  <div class="pb-20">
                    <table class="table" id="rangkuman_table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Mapel</th>
                          <th>Kelas</th>
                          <th>Nilai <br>
                            Keterampilan</th>
                          <th>Nilai <br>
                            Pengetahuan</th>
                          <th>Jenjang</th>
                          <th>Tahun <br>
                            Pelajaran</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($rangkuman as $rangkuman)
                        <tr>
                          <td>{{ $rangkuman->siswa->nama_siswa }}</td>
                          <td>{{ $rangkuman->mapel->nama_mapel }}</td>
                          <td>{{ $rangkuman->kelas->kelas }}</td>
                          <td>{{ $rangkuman->nilai_keterampilan }}</td>
                          <td>{{ $rangkuman->nilai_pengetahuan }}</td>
                          <td>{{ $rangkuman->jenjang }}</td>
                          <td>{{ $rangkuman->tahun_pelajaran }}</td>
                        </tr>
                        @endforeach  
                      </tbody>
                    </table>
                  </div>
                </div>
    </div>
	</div>
	<!-- js -->
	<script src="{{ asset('admin/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('admin/vendors/scripts/layout-settings.js') }}"></script>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script> 
  {{-- <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
  {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script> --}}
	{{-- <script src="{{ asset('admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script> --}}
  <script>
    /* Plugin API method to determine is a column is sortable */
$.fn.dataTable.Api.register( 'column().searchable()', function () {
  var ctx = this.context[0];
  return ctx.aoColumns[ this[0] ].bSearchable;
} );


$(document).ready( function () {
  // Create the DataTable
  var table = $('#rangkuman_table').DataTable( {
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false,
    dom: "Bfrtip",
    buttons: [
      {
        extend:    'pdfHtml5',
        text:      '<i class="icon-copy dw dw-download1"></i> PDF',
        className: 'btn btn-sm btn-primary'
      }
    ],
    fixedHeader: true,
    pageLength: 25,
    orderCellsTop: true,
    columnDefs: [
      { searchable: false, targets: [ 0, 4 ] }
    ],
    stateSave: true
  } );
  table.buttons().container().appendTo($('#button'));
  // Add filtering
  table.columns(5).every( function () {
    if ( this.searchable() ) {
      var that = this;

      // Create the `select` element
      var select = $('<select class="form-control"><option value="">Pilih semua jenjang</option></select>')
        .appendTo('#filter')
        .on( 'change', function() {
          that
            .search($(this).val())
            .draw();
        } );

      // Add data
      this
        .data()
        .sort()
        .unique()
        .each( function(d) {
          select.append($('<option>' + d + '</option>'));
        } );
      
      // Restore state saved values
      var state = this.state.loaded();
      if ( state ) {
        var val = state.columns[ this.index() ];
        select.val( val.search.search );
      }
    }
  } );
} );

    // $(document).ready(function(){
    //   // $('#rangkuman_table').DataTable();
    //   $('#rangkuman_table').DataTable( {
        
    //     initComplete: function () {
    //         this.api().columns(5).every( function () {
    //             var column = this;
    //             var select = $('<select class="form-control"><option value="">Pilih jenjang</option></select>')
    //                 .appendTo('#filter')
    //                 .on( 'change', function () {
    //                     var val = $.fn.dataTable.util.escapeRegex(
    //                         $(this).val()
    //                     );
 
    //                     column
    //                         .search( val ? '^'+val+'$' : '', true, false )
    //                         .draw();
    //                 } );
 
    //             column.data().unique().sort().each( function ( d, j ) {
    //                 select.append( '<option value="'+d+'">'+d+'</option>' )
    //             } );
    //         } );
    //     },
    // } );
    // });
  </script>
</body>
</html>
{{-- @extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    // $('#rangkuman_table').DataTable();
    fetch_data();

    function fetch_data(jenjang = '')
    {
    $('#rangkuman_table').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
      url:"{{ route('siakad.rangkuman_nilai') }}",
      data: {jenjang:jenjang}
      },
      columns:[
            {data: 'id', name: 'id'},
            {data: 'user_id', name: 'user_id'},
            {data: 'siswa_id', name: 'siswa_id'},
            {data: 'mapel_id', name: 'mapel_id'},
            {data: 'kelas_id', name: 'kelas_id'},
            {data: 'nilai_keterampilan', name: 'nilai_keterampilan'},
            {data: 'nilai_pengetahuan', name: 'nilai_pengetahuan'},
            {data: 'tahun_pelajaran', name: 'tahun_pelajaran'},
            {data: 'jenjang', name: 'jenjang', orderable: false},
      ]
    });
    }

    $('#jenjang_filter').change(function(){
    var jenjang = $('#jenjang_filter').val();

    $('#rangkuman_table').DataTable().destroy();

    fetch_data(jenjang);
    });
    // var table = $('#rangkuman_table').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     ajax: {
    //       url: "{{ route('siakad.rangkuman_nilai') }}",
    //       data: function (d) {
    //             d.jenjang = $('#jenjang').val()
    //             d.search = $('input[type="search"]').val()
    //         }
    //     },
    //     columns: [
    //         {data: 'id', name: 'id'},
    //         {data: 'user_id', name: 'user_id'},
    //         {data: 'siswa_id', name: 'siswa_id'},
    //         {data: 'mapel_id', name: 'mapel_id'},
    //         {data: 'kelas_id', name: 'kelas_id'},
    //         {data: 'nilai_keterampilan', name: 'nilai_keterampilan'},
    //         {data: 'nilai_pengetahuan', name: 'nilai_pengetahuan'},
    //         {data: 'tahun_pelajaran', name: 'tahun_pelajaran'},
    //         {data: 'jenjang', name: 'jenjang'},
    //     ]
    // });
  
    // $('#search').change(function(){
    //     table.draw();
    // });
  });
</script>    
@stop --}}
