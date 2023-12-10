@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Nilai Kuliah</h3>

	<a href="/nilaikuliah" class='btn btn-primary'> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-2 control-label">NRP</label>
            <div class="col-6">
                <input name="NRP" type="number" class="form-control" placeholder="Masukkan NRP ..." required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-2 control-label">Nilai Angka</label>
            <div class="col-6">
                <input name="NilaiAngka" type="number" class="form-control" id="NilaiAngka" placeholder="Masukkan nilai angka ..." required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-sm-2 control-label">SKS</label>
            <div class="col-6">
                <input name="SKS" type="number" class="form-control" id="SKS" placeholder="Masukkan SKS ..." required="required">
            </div>
        </div>
		<input type="submit" class='btn btn-primary' value="Tambah Data">
	</form>

@endsection
