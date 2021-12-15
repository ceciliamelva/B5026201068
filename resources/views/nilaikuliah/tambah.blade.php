@extends('layout.ceria')

@section('title', 'NILAI KULIAH')

@section('isikonten')

@section('judulhalaman', 'NILAI KULIAH')

	<a href="/nilaikuliah"> Kembali</a>

    <br/>
    <br/>

	<form action="/nilaikuliah/store" method="post">
		{{ csrf_field() }}

        <div class="col-md-2">NRP</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
		    <input type="text" name="NRP" required="required">
        </div><br/><br/>

        <div class="col-md-2">Nilai Angka</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
		    <input type="number" name="NilaiAngka" required="required">
        </div><br/><br/>

        <div class="col-md-2">SKS</div>
        <div class="col-md-1">:</div>
        <div class="col-md-8">
            <input type="number" name="SKS" required="required">
        </div><br/><br/>

		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="color: rgb(255, 255, 255);">
	</form>

@endsection
