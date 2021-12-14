<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dvdController extends Controller
{
    public function index()
    {
    	// mengambil data dari table dvd
    	$dvd = DB::table('dvd')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('dvd.index',['dvd' => $dvd]);

    }

        // method untuk menampilkan view form tambah dvd
    public function tambah()
    {

        // memanggil view tambah
        return view('dvd.tambah');

    }

        // method untuk insert data ke table dvd
    public function store(Request $request)
    {
        // insert data ke table dvd
        DB::table('dvd')->insert([
            // 'kodedvd' => $request->kode,
            'merkdvd' => $request->merk,
            'stockdvd' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman dvd
        return redirect('/dvd');

    }

    // method untuk view data dvd
    public function view($kode)
    {
        // mengambil data dvd berdasarkan id yang dipilih
        $dvd = DB::table('dvd')->where('kodedvd',$kode)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('dvd.detail',['dvd' => $dvd]);

    }

        // method untuk edit data dvd
    public function edit($kode)
    {
        // mengambil data dvd berdasarkan id yang dipilih
        $dvd = DB::table('dvd')->where('kodedvd',$kode)->get();
        // passing data dvd yang didapat ke view edit.blade.php
        return view('dvd.edit',['dvd' => $dvd]);

    }

    public function update(Request $request)
    {
        // update data dvd
        DB::table('dvd')->where('kodedvd', $request->kode)->update([
            'merkdvd' => $request->merk,
            'stockdvd' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman dvd
        return redirect('/dvd');
    }

        // method untuk hapus data dvd
    public function hapus($kode)
    {
        // menghapus data dvd berdasarkan id yang dipilih
        DB::table('dvd')->where('kodedvd',$kode)->delete();

        // alihkan halaman ke halaman dvd
        return redirect('/dvd');
    }

    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table dvd sesuai pencarian data
	$dvd = DB::table('dvd')
	->where('merkdvd','like',"%".$cari."%")
    ->orWhere('tersedia','like',"%".$cari."%")
	->paginate(3);

    	// mengirim data dvd ke view index
	return view('dvd.index',['dvd' => $dvd]);

    }

}
