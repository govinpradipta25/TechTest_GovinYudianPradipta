<!DOCTYPE html>
<html>
<head>
	<title>Bonus Case</title>
</head>
<body>
 
	
	<h3>Data instansi</h3>
 
	<a href="/<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data instansi</h3>
 
	<a href="/instansi/tambah"> + Tambah instansi Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
		@foreach($instansi_tbl as $i)
		<tr>
			<td>{{ $i->instansi }}</td>
			<td>{{ $i->deskripsi }}</td>
			
			<td>
				<a href="/instansi/edit/{{ $i->id }}">Edit</a>
				|
				<a href="/instansi/hapus/{{ $i->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>/tambah"> + Tambah instansi Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
		@foreach($instansi_tbl as $i)
		<tr>
			<td>{{ $i->instansi }}</td>
			<td>{{ $i->deskripsi }}</td>
			<td>
				<a href="/instansi/edit/{{ $i->id }}">Edit</a>
				|
				<a href="/instansi/hapus/{{ $i->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>