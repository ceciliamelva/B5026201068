@extends('layout.ceria')
@section('title', 'ABSEN PEGAWAI')
@section('isikonten')
@section('judulhalaman', 'ABSEN PEGAWAI')

	<a href="/absen/tambah" class="btn btn-primary" > + Tambah Absen Pegawai Baru</a>

	<br/>
	<br/>

    <p>Cari Data Absen :</p>
	<form action="/absen/cari" method="GET">
        <div class="input-group ">
            <input type="text" class="form-control" name="cari" placeholder="Cari Absen .." value="{{ old('cari') }}">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" value="CARI"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
	</form>

    <br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $absen->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
