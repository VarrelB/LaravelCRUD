<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD</title>
</head>
<body>

	<h3>Data Buku</h3>

	<a href="/buku/tambah"> + Tambah Buku Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>id</th>
			<th>judul</th>
			<th>penerbit</th>
			<th>tahun_terbit</th>
			<th>pengarang</th>
		</tr>
		@foreach($buku as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->judul }}</td>
			<td>{{ $p->penerbit }}</td>
			<td>{{ $p->tahun_terbit }}</td>
            <td>{{ $p->pengarang }}</td>
			<td>
				<a href="/buku/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/buku/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>