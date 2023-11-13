<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $a = 3;
        $b = 7;
        $c = $a*$b;
        return"<h3>Hasil Perkalian:".(String)$c."</h3>";
    }

    public function showBlog(){
        $nama = "Putri";
        $alamat = "Lamongan";
        $umur = 19;
        return view('blog',['nama'=>$nama,'alamat'=>$alamat,'umur'=>$umur]);
    }

    public function shownama($nama){
        return"Anda telah mengisikan : ". $nama; //$nama = {nama} di web.app
    }

    public function formulir(){
 
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
