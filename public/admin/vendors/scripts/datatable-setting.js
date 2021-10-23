$('document').ready(function(){

	$('.data-table').DataTable({
		scrollCollapse: true,
		autoWidth: false,
		responsive: true,
		columnDefs: [{
			targets: "datatable-nosort",
			orderable: false,
		}],
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		"language": {
			"info": "_START_-_END_ of _TOTAL_ entries",
			searchPlaceholder: "Search",
			paginate: {
				next: '<i class="ion-chevron-right"></i>',
				previous: '<i class="ion-chevron-left"></i>'  
			}
		},
	});

	// var table = $('.data-table').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     ajax: {
    //       url: "{{ route('siakad.rangkuman_nilai') }}",
    //       data: function (d) {
    //             d.search = $('#search').val()
    //             // d.search = $('input[type="search"]').val()
    //         }
    //     },
    //     columns: [
    //         {data: 'id', name: 'id'},
    //         {data: 'user_id', name: 'user_id'},
    //         {data: 'siswa_id', name: 'siswa_id'},
    //         {data: 'mapel_id', name: 'mapel_id'},
	// 		{data: 'kelas_id', name: 'kelas_id'},
	// 		{data: 'nilai_keterampilan', name: 'nilai_keterampilan'},
	// 		{data: 'nilai_pengetahuan', name: 'nilai_pengetahuan'},
	// 		{data: 'tahun_pelajaran', name: 'tahun_pelajaran'},
	// 		{data: 'jenjang', name: 'jenjang'},
    //     ]
    // });
  
    // $('#search').change(function(){
    //     table.draw();
    // });

	// 	var table = $('.data-table').DataTable();
	 
	// 	$(".data-table tfoot th").each( function ( i ) {
	// 		var select = $('<select><option value=""></option></select>')
	// 			.appendTo( $(this).empty() )
	// 			.on( 'change', function () {
	// 				table.column( i )
	// 					.search( $(this).val() )
	// 					.draw();
	// 			} );
	 
	// 		table.column( i ).data().unique().sort().each( function ( d, j ) {
	// 			select.a
	// 			select.append( '<option value="'+d+'">'+d+'</option>' )
    //     } );
    // } );

	$('.data-table-export').DataTable({
		scrollCollapse: true,
		autoWidth: false,
		responsive: true,
		columnDefs: [{
			targets: "datatable-nosort",
			orderable: false,
		}],
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		"language": {
			"info": "_START_-_END_ of _TOTAL_ entries",
			searchPlaceholder: "Search/Filter",
			paginate: {
				next: '<i class="ion-chevron-right"></i>',
				previous: '<i class="ion-chevron-left"></i>'  
			}
		},
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
                extend: 'copy',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5, 6 ]
                }
            },
		],
	});

	var table = $('.select-row').DataTable();
	$('.select-row tbody').on('click', 'tr', function () {
		if ($(this).hasClass('selected')) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});

	var multipletable = $('.multiple-select-row').DataTable();
	$('.multiple-select-row tbody').on('click', 'tr', function () {
		$(this).toggleClass('selected');
	});
	var table = $('.checkbox-datatable').DataTable({
		'scrollCollapse': true,
		'autoWidth': false,
		'responsive': true,
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		"language": {
			"info": "_START_-_END_ of _TOTAL_ entries",
			searchPlaceholder: "Search",
			paginate: {
				next: '<i class="ion-chevron-right"></i>',
				previous: '<i class="ion-chevron-left"></i>'  
			}
		},
		'columnDefs': [{
			'targets': 0,
			'searchable': false,
			'orderable': false,
			'className': 'dt-body-center',
			'render': function (data, type, full, meta){
				return '<div class="dt-checkbox"><input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '"><span class="dt-checkbox-label"></span></div>';
			}
		}],
		'order': [[1, 'asc']]
	});

	$('#example-select-all').on('click', function(){
		var rows = table.rows({ 'search': 'applied' }).nodes();
		$('input[type="checkbox"]', rows).prop('checked', this.checked);
	});

	$('.checkbox-datatable tbody').on('change', 'input[type="checkbox"]', function(){
		if(!this.checked){
			var el = $('#example-select-all').get(0);
			if(el && el.checked && ('indeterminate' in el)){
				el.indeterminate = true;
			}
		}
	});
});