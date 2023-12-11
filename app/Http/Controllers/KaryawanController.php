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

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => [
                'required',
                'integer',
                DB::unique('kodepegawai'),
            ],
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ], [
            'kodepegawai.unique' => 'Kode Pegawai sudah ada, silakan isi ulang.',
        ]);

        // Validasi berhasil, maka simpan data
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => strtoupper($request->namalengkap),
            'divisi' => $request->divisi,
            'departemen' => strtolower($request->departemen),
        ]);

        return redirect('/karyawan')->with('success', 'Data berhasil disimpan.');
    }

    // method untuk edit data karyawan
    public function edit($id)
    {
        // mengambil data karyawan berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')
                    ->where('kodepegawai',$id)
                    ->get();

        // passing data karyawan yang didapat ke view edit.blade.php
        return view('editKaryawan',['karyawan' => $karyawan]);

    }

    // update data karyawan
    public function update(Request $request)
    {
        // update data karyawan
        DB::table('karyawan')->where('kodepegawai',$request->id)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
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

    public function view($id)
    {
        // melihat data karyawan berdasarkan id yang dipilih
        $karyawan = DB::table('karyawan')
                    ->where('kodepegawai',$id)
                    ->get();

        // mengirim data karyawan ke view
        return view('viewKaryawan',['karyawan' => $karyawan]);
    }

}



