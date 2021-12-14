@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PEGAWAI')

	<a href="/pegawai"> Kembali</a>

    <br/><br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="col-md-1 mb-2">Nama</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10 mb-2">
		    <input type="text" name="nama" required="required">
        </div><br/><br/>

        <div class="col-md-1">Jabatan</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <input type="text" name="jabatan" required="required">
        </div><br/><br/>

        <div class="col-md-1">Umur</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <input type="number" name="umur" required="required">
        </div><br/><br/>

        <div class="col-md-1">Alamat</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <textarea name="alamat" required="required"></textarea>
        </div><br/><br/>

		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="color: rgb(255, 255, 255);">
	</form>

@endsection
