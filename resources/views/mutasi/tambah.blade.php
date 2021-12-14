@extends('layout.ceria')

@section('title', 'MUTASI PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH MUTASI PEGAWAI')

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}

        <div class="col-md-2 mb-5">Pegawai</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
            <select id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
        </div><br/><br/>

        <div class="col-md-2">Departemen</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
            <input type="text" name="departemen" required="required">
        </div><br/><br/>

        <div class="col-md-2 mb-5">SubDepatemen</div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
            <input type="text" name="subdepartemen" required="required">
        </div><br/><br/>

        <div class="col-md-2">
		    <label for="dtpickerdemo" class="control-label" style="font-weight: lighter">Mulai Bertugas</label>
        </div>
        <div class="col-md-1">:</div>
        <div class="col-md-9">
            <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                <input type='text' class="form-control" name="mulaibertugas" />
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
        <br/><br/>


		<input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="color: rgb(255, 255, 255);">
	</form>

@endsection
