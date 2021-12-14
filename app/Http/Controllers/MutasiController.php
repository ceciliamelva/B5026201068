<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MutasiController extends Controller
{
    public function index()
    {
    	// // mengambil data dari table mutasi
    	// $mutasi = DB::table('mutasi')->get();

        $mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('mutasi.*', 'pegawai.pegawai_nama')
        ->paginate(5);

    	// mengirim data mutasi ke view index
    	return view('mutasi.index',['mutasi' => $mutasi]);

    }

        // method untuk menampilkan view form tambah mutasi
        public function tambah()
        {

            // memanggil view tambah
            // return view('mutasi.tambah');

            $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

	        return view('mutasi.tambah', ['pegawai' => $pegawai]);

        }


        // method untuk insert data ke table absen
        public function store(Request $request)
        {
            //DB::table()->insert();
            // insert data ke table mutasi
            DB::table('mutasi')->insert([
                'IDPegawai' => $request->IDPegawai,
                'Departemen' => $request->departemen,
                'SubDepartemen' => $request->subdepartemen,
                'MulaiBertugas' => $request->mulaibertugas
            ]);
            // alihkan halaman ke halaman absen
            return redirect('/mutasi');
        }

        // }

        // method untuk edit data pegawai
        public function edit($id)
        {
            // mengambil data pegawai berdasarkan id yang dipilih
            $mutasi = DB::table('mutasi')->where('ID',$id)->get();

            $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

            // passing data pegawai yang didapat ke view edit.blade.php
            return view('mutasi.edit',['mutasi' => $mutasi,'pegawai' => $pegawai]);
        }


            // update data mutasi
        public function update(Request $request)
        {
            // update data mutasi
            DB::table('mutasi')->where('ID',$request->id)->update([
                'IDPegawai' => $request->IDPegawai,
                'Departemen' => $request->departemen,
                'SubDepartemen' => $request->subdepartemen,
                'MulaiBertugas' => $request->mulaibertugas
            ]);
            // alihkan halaman ke halaman mutasi
            return redirect('/mutasi');
        }

            // method untuk hapus data mutasi
        public function hapus($id)
        {
            // menghapus data mutasi berdasarkan id yang dipilih
            DB::table('mutasi')->where('ID',$id)->delete();

            // alihkan halaman ke halaman mutasi
            return redirect('/mutasi');
        }

        public function cari(Request $request)
        {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
		$mutasi = DB::table('mutasi')
        ->join('pegawai', 'mutasi.IDPegawai', '=', 'pegawai.pegawai_id')
		->where('pegawai.pegawai_nama','like',"%".$cari."%")
        ->orWhere('mutasi.Departemen', 'like', "%".$cari."%")
		->paginate(2);

    		// mengirim data pegawai ke view index
		return view('mutasi.index',['mutasi' => $mutasi]);

        }

}
