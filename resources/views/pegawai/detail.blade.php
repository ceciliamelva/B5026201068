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
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

        <div class="col-md-1 mb-2">Nama</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10 mb-2">
		    <label class="control-label">{{ $p->pegawai_nama }}</label>
        </div><br/><br/>

        <div class="col-md-1">Jabatan</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <label class="control-label">{{ $p->pegawai_jabatan }}</label>
        </div><br/><br/>

        <div class="col-md-1">Umur</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
		    <label class="control-label">{{ $p->pegawai_umur }}</label>
        </div><br/><br/>

        <div class="col-md-1">Alamat</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <label class="control-label">{{ $p->pegawai_alamat }}</label>
        </div><br/><br/>

        
	</form>
	@endforeach


@endsection
