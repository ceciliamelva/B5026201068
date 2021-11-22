<!DOCTYPE html>
<html>
<head>
	<title>5026201068</title>
</head>
<body>

	<h2>Tugas</h2>
	<h3>Edit Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
		IDPegawai <input type="text" required="required" name="idpegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="departemen" value="{{ $m->Departemen }}"> <br/>
		SubDepartemen <input type="text" required="required" name="subdepartemen" value="{{ $m->SubDepartemen }}"> <br/>
		MulaiBertugas <input type="datetime-local" required="required" name="mulaibertugas" value="{{ $m->MulaiBertugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
