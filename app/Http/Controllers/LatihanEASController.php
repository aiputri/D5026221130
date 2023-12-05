<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatihanEasController extends Controller
{
    public function index()
    {
        //mengambil data dari tabel pegawai
        // $pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

        //mengirim data pegawai ke view index
        return view('latihanEas', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahLatihanEas');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/nilaikuliah');
    }


}
