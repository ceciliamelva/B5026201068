@extends('layout.ceria')

@section('title', 'DVD ')

@section('isikonten')

@section('judulhalaman', 'VIEW DVD')

	<a href="/dvd"> Kembali</a>

	<br/>
	<br/>

	@foreach($dvd as $d)
	<form action="/dvd/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $d->kodedvd }}"> <br/>

        <div class="col-md-1 mb-2">Merk</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10 mb-2">
		    <label class="control-label">{{ $d->merkdvd }}</label>
        </div><br/><br/>

        <div class="col-md-1">Stock</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <label class="control-label">{{ $d->stockdvd }}</label>
        </div><br/><br/>

        <div class="col-md-1">Tersedia</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <label class="control-label">{{ $d->tersedia }}</label>
        </div><br/><br/>

	</form>
	@endforeach


@endsection
