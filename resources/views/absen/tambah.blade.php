@extends('layout.ceria')
@section('title', 'ABSEN PEGAWAI')
@section('isikonten')
@section('judulhalaman', 'ABSEN PEGAWAI')

	<form action="/absen/store" method="post">
		{{ csrf_field() }}

        <div class="col-md-1 mb-5">Pegawai</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <select id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
        </div><br/><br/>

        <div class="col-md-1">
		    <label for="dtpickerdemo" class="control-label" style="font-weight: lighter">Tanggal</label>
        </div>
        <div class="col-md-1">:</div>
        <div class="col-md-10 pt-md-2 mt-md-2">
            <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" />
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

        <div class="col-md-1">Status</div>
        <div class="col-md-1">:</div>
        <div class="col-md-10">
            <input type="radio" id="hadir" name="status" value="H">
            <label for="hadir">HADIR</label>
            <input type="radio" id="tidak" name="status" value="T" checked="checked">
            <label for="tidak">TIDAK HADIR</label>
        </div><br/><br/>

        <input type="submit" value="Simpan Data" class="py-md-5 btn btn-primary" style="color: rgb(255, 255, 255);">
	</form>




@endsection

