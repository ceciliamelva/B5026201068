@extends('layout.ceria')
@section('title', 'DVD')
@section('isikonten')
@section('judulhalaman', 'DVD')


	<a href="/dvd/tambah" class="btn btn-primary"> + Tambah DVD Baru</a>

	<br/>
	<br/>

    <p>Cari Data DVD :</p>
	<form action="/dvd/cari" method="GET">
        <div class="input-group ">
            <input type="text" class="form-control" name="cari" placeholder="Cari DVD .." value="{{ old('cari') }}">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" value="CARI"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
	</form>

	<br/>
    <br/>

	<table class="table table-success table-striped">
		<tr>
            <th>No</th>
			{{-- <th>Kode</th> --}}
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>

		@foreach($dvd as $d)
		<tr>
            <td>{{ $loop->iteration }}</td>
			{{-- <td>{{ $d->kodedvd }}</td> --}}
			<td>{{ $d->merkdvd }}</td>
			<td>{{ $d->stockdvd }}</td>
			<td>{{ $d->tersedia }}</td>
			<td>
                <a href="/dvd/detail/{{ $d->kodedvd }}" class="btn btn-default btn-sm" role="button">View Detail</a>
				<a href="/dvd/edit/{{ $d->kodedvd }}" class="btn btn-warning">Edit</a>
				<a href="/dvd/hapus/{{ $d->kodedvd }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $dvd->links()  }}

@endsection
