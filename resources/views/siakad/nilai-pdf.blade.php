<!DOCTYPE html>
<html>
<head>
	<title>Nilai {{ $siswa->nama_siswa }}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Nilai Siswa</h5>
	</center>

    <p>NIS : {{ $siswa->nis }}</p>
    <p>Nama : {{ $siswa->nama_siswa }}</p>
    <p>Kelas : {{ $siswa->kelas->kelas }}</p>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Mapel</th>
				<th>Kelas</th>
                <th>Nilai Keterampilan</th>
                <th>Nilai Pengetahuan</th>
                <th>Tahun Ajaran</th>
                <th>Jenjang</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($siakad as $siakad)        
            <tr>
                <td>{{ $siakad->mapel->nama_mapel }}</td>
				<td>{{ $siakad->kelas->kelas }}</td>
                <td>{{ $siakad->nilai_keterampilan }}</td>
                <td>{{ $siakad->nilai_pengetahuan }}</td>
                <td>{{ $siakad->tahun_pelajaran }}</td>
                <td>{{ $siakad->jenjang }}</td>
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>