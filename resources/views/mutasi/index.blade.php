@extends('layout.ceria')

@section('title', 'MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DATA MUTASI PEGAWAI')

	<a href="/mutasi/tambah" class="btn btn-primary"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

    <p>Cari Data Mutasi :</p>
	<form action="/mutasi/cari" method="GET">
        <div class="input-group ">
            <input type="text" class="form-control" name="cari" placeholder="Cari Mutasi .." value="{{ old('cari') }}">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" value="CARI"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
	</form>

    <br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>
			{{-- <th>ID</th> --}}
            <th>No</th>
			<th>Pegawai</th>
			<th>Departemen</th>
			<th>SubDepartemen</th>
			<th>MulaiBertugas</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			{{-- <td>{{ $m->ID }}</td> --}}
            <td>{{ $loop->iteration }}</td>
			<td>{{ $m->pegawai_nama }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
            <td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $mutasi->links() }}

@endsection
