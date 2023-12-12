<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{

    public function index()
    {
    	// mengambil data dari table karyawan
    	//$karyawan = DB::table('karyawan')->get();

        $karyawan = DB::table('karyawan')->paginate(5);

    	// mengirim data karyawan ke view index
    	return view('indexKaryawan',['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahKaryawan');

    }

    // method untuk insert data ke table karyawan
    public function store(Request $request)
    {
        // Validasi input
        $existKaryawan = DB::table('karyawan')
                            ->where('kodepegawai', $request->kodepegawai)
                            ->first();

        if ($existKaryawan) {
        return redirect('/karyawan')->with('error', 'Kode karyawan sudah ada!');
        }

        // Jika validasi berhasil, simpan data ke database
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // Alihkan halaman ke halaman karyawan
        return redirect('/karyawan')->with('success', 'Data berhasil disimpan!');
    }
    
    // method untuk hapus data karyawan
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table karyawan sesuai pencarian data
		$karyawan = DB::table('karyawan')
                    ->where('namalengkap','like',"%".$cari."%")
                    ->paginate();

    		// mengirim data karyawan ke view index
		return view('indexKaryawan',['karyawan' => $karyawan]);

	}

}



