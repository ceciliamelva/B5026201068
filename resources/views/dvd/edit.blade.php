@extends('layout.ceria')

@section('title', 'DVD')

@section('isikonten')

@section('judulhalaman', 'EDIT DVD')

	<a href="/dvd"> Kembali</a>

	<br/>
	<br/>

	@foreach($dvd as $d)
	<form action="/dvd/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $d->kodedvd }}">

        <div class="col-md-1 mb-2">Merk</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10 mb-2">
		    <input type="text" required="required" name="merk" value="{{ $d->merkdvd }}">
        </div><br/><br/>

        <div class="col-md-1">Stock</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <input type="text" required="required" name="stock" value="{{ $d->stockdvd }}">
        </div><br/><br/>

        <div class="col-md-1">Tersedia</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <input type="radio" id="ya" name="tersedia" value="Y" @if ($d->tersedia === "Y") checked="checked" @endif>
            <label for="ya">YA</label>
            <input type="radio" id="tidak" name="tersedia" value="T" @if ($d->tersedia === "T") checked="checked" @endif>
            <label for="tidak">TIDAK</label>
        </div><br/><br/>

		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="color: rgb(255, 255, 255);">
	</form>
	@endforeach


@endsection
