@extends('layout.ceria')

@section('title', 'MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT MUTASI PEGAWAI')

	<a href="/mutasi"> Kembali</a>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>

        <div class="col-md-2">Pegawai</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
            <select id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $peg)
                    <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $m->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                @endforeach

            </select><br>
        </div><br/><br/>

        <div class="col-md-2">Departemen</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
            <input type="text" name="departemen" value="{{ $m->Departemen }}" required="required">
        </div><br/><br/>

        <div class="col-md-2">SubDepartemen</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
            <input type="text" name="subdepartemen" value="{{ $m->SubDepartemen }}" required="required">
        </div><br/><br/>

        <div class="col-md-2">Mulai Bertugas</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9 pt-md-2 mt-md-2">
            <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                <input type='text' class="form-control" name="mulaibertugas" value="{{ $m->MulaiBertugas }}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
        </div><br/><br/>

		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="text-alignme">


	</form>
	@endforeach


@endsection
