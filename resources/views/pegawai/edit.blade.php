@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT PEGAWAI')

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class="col-md-1 mb-2">Nama</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10 mb-2">
		    <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div><br/><br/>

        <div class="col-md-1">Jabatan</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div><br/><br/>

        <div class="col-md-1">Umur</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
        </div><br/><br/>

        <div class="col-md-1">Alamat</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
        </div><br/><br/><br/>

		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="color: rgb(255, 255, 255);">
	</form>
	@endforeach


@endsection
