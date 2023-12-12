<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{

    public function index()
    {
    	// mengambil data dari table hewan
    	//$hewan = DB::table('hewan')->get();

        $hewan = DB::table('hewan')->paginate(10);

    	// mengirim data hewan ke view index
    	return view('indexDataHewan',['hewan' => $hewan]);

    }

    // method untuk menampilkan view form tambah hewan
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahDataHewan');

    }

    // method untuk insert data ke table hewan
    public function store(Request $request)
    {
        // insert data ke table hewan
        DB::table('hewan')->insert([
            'namahewan' => $request->namahewan,
            'jumlahhewan' => $request->jumlahhewan,
            'tersedia' => ($request->jumlahhewan > 0) ? '1' : '0'
        ]);
        // alihkan halaman ke halaman hewan
        return redirect('/database-hewan');

    }

    // method untuk edit data hewan
    public function edit($id)
    {
        // mengambil data hewan berdasarkan id yang dipilih
        $hewan = DB::table('hewan')
                    ->where('kodehewan',$id)
                    ->get();

        // passing data hewan yang didapat ke view edit.blade.php
        return view('editDataHewan',['hewan' => $hewan]);

    }

    // update data hewan
    public function update(Request $request)
    {
        // update data hewan
        DB::table('hewan')->where('kodehewan',$request->id)->update([
            'namahewan' => $request->namahewan,
            'jumlahhewan' => $request->jumlahhewan,
            'tersedia' => ($request->jumlahhewan > 0) ? '1' : '0'
        ]);
        // alihkan halaman ke halaman hewan
        return redirect('/database-hewan');
    }

    // method untuk hapus data hewan
    public function hapus($id)
    {
        // menghapus data hewan berdasarkan id yang dipilih
        DB::table('hewan')->where('kodehewan',$id)->delete();

        // alihkan halaman ke halaman hewan
        return redirect('/database-hewan');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table hewan sesuai pencarian data
		$hewan = DB::table('hewan')
                    ->where('namahewan','like',"%".$cari."%")
                    ->paginate();

    		// mengirim data hewan ke view index
		return view('indexDataHewan',['hewan' => $hewan]);

	}

    public function view($id)
    {
        // melihat data hewan berdasarkan id yang dipilih
        $hewan = DB::table('hewan')
                    ->where('kodehewan',$id)
                    ->get();

        // mengirim data hewan ke view
        return view('viewDataHewan',['hewan' => $hewan]);
    }

}



