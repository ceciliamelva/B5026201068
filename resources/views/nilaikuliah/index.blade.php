@extends('layout.ceria')

@section('title', 'NILAI KULIAH')

@section('isikonten')

@section('judulhalaman', 'NILAI KULIAH')

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data</a>

	<br/>
	<br/>

    <p>Cari Data Nilai :</p>
	<form action="/nilaikuliah/cari" method="GET">
        <div class="input-group ">
            <input type="text" class="form-control" name="cari" placeholder="Cari Nilai .." value="{{ old('cari') }}">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" value="CARI"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
	</form>

    <br/>
	<br/>

	<table class="table table-success table-striped">
		<tr>

            <th>No</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>

            <td>{{ $loop->iteration }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                <?php
                    if($n->NilaiAngka <=40){
                        echo "D";
                    } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                        echo "C";
                    } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                        echo "B";
                    } else{
                        echo "A";
                    }
                    ?>
            </td>
            <td>
                <?php
                    $bobot = $n->NilaiAngka * $n->SKS;
                    echo $bobot;
                    ?>
            </td>

		</tr>
		@endforeach
	</table>

    {{ $nilaikuliah->links() }}
@endsection
