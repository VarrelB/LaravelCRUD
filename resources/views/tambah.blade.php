<!DOCTYPE html>
<html>
<head>
	<title>Input data</title>
</head>
<body>

	<h3>Data Buku</h3>

	<a href="/buku"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/buku/store" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		judul <input type="text" name="judul" required="required"> <br/>
		penerbit <input type="text" name="penerbit" required="required"> <br/>
		tahun_terbit <input type="number" name="tahun terbit" required="required"> <br/>
        pengarang <input type="text" name="pengarang" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>