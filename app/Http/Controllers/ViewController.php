<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    // function showPraktikum2()
    // {
    //     return view('prak2web'); //kalau sudah konek model, cara ini tidak bisa
    // }

    // function mathFunc(Request $request)
    // {
    //     return view('tugas4');
    // }

    // function showForm()
    // {
    //     return view('showHasil');
    // }

    function mathFunc(Request $request)
    {
        return view('tugas');
    }

    function showForm()
    {
        return view('showHasil');
    }


}
