@extends('layout.ceria')

@section('title', 'DVD')

@section('isikonten')

@section('judulhalaman', 'TAMBAH DVD')

	<a href="/dvd"> Kembali</a>

    <br/>
    <br/>

	<form action="/dvd/store" method="post">
		{{ csrf_field() }}

        <div class="col-md-1">Merk</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <input type="text" name="merk" required="required">
        </div><br/><br/>

        <div class="col-md-1">Stock</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <input type="number" name="stock" required="required">
        </div><br/><br/>

        <div class="col-md-1">Tersedia</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <input type="radio" id="ya" name="tersedia" value="Y">
            <label for="ya">YA</label>
            <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
            <label for="tidak">TIDAK</label>
        </div><br/><br/>

		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="color: rgb(255, 255, 255);">
	</form>

@endsection
