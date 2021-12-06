@extends('layout.ceria')

@section('title', 'DATA ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>

        <div class="col-md-1">Pegawai</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <select id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                    <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach
            </select><br>
        </div>

        <div class="col-md-1">Tanggal</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10 pt-md-2 mt-md-2">
            <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" value="{{ $p->Tanggal }}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
        </div>
        <br>

		<div class="col-md-1">Status</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
            <label for="hadir">HADIR</label>
            <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
            <label for="tidak">TIDAK HADIR</label>
        </div>

		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="text-alignme">
	</form>
	@endforeach


    @endsection
