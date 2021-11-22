<!DOCTYPE html>
<html>
<head>
	<title>5026201068</title>
</head>
<body>

	<h2>Tugas</h2>
	<h3>Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        ID <input type="text" name="id" required="required"> <br/>
		IDPegawai <input type="text" name="idpegawai" required="required"> <br/>
		Departemen <input type="text" name="departemen" required="required"> <br/>
		SubDepartemen <input type="text" name="subdepartemen" required="required"> <br/>
        MulaiBertugas <input type="datetime-local" name="mulaibertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
