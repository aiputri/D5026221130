@extends('master2')


@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class = "input-group mb-3">
            <label for = "kodepegawai" class = "col-sm-2 control-label">Kode Pegawai</label>
            <div class = "col-sm-6" {{ $errors->get('studentname') ? 'has-error' : '' }}>
                <input type="text" name="kodepegawai" class="form-control" id="kodepegawai" placeholder="Masukan Nama Karyawan..." required>
                @foreach($errors->get('kodepegawai') as $error)
                <span class="help-block">{{ $error }}</span>
                @endforeach
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="namalengkap" class="col-sm-2 control-label">Nama Lengkap</label>
            <div class="col-sm-6">
                <input type="text" name="namalengkap" class="form-control" id="namalengkap" placeholder="Masukan Nama Karyawan..." required>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="divisi" class="col-sm-2 control-label">Divisi</label>
            <div class="col-sm-6">
                <input type="text" name="divisi" class="form-control" id="divisi" placeholder="Masukan Divisi Karyawan..." required>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="departemen" class="col-sm-2 control-label">Departemen</label>
            <div class="col-sm-6">
                <input name="departemen" class="form-control" id="departemen" placeholder="Masukan Deprtemen Karyawan..." required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>

	</form>
@endsection
