<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatihanEasController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel nilaikuliah
        // $nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

        //mengirim data latihankuliah ke view index
        return view('latihanEas', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahLatihanEas');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'ID' => $request->ID,
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }
}
