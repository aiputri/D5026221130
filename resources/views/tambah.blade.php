@extends('master2')


@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <label for="nama" class="input-group-text col-sm-1 control-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama Pegawai..." required>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="jabatan" class="input-group-text col-sm-1 control-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Masukan Jabatan Pegawai..." required>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="umur" class="input-group-text col-sm-1 control-label">Umur</label>
            <div class="col-sm-10">
                <input type="number" name="umur" class="form-control" id="umur" placeholder="Masukan Umur Pegawai..." required>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="alamat" class="input-group-text col-sm-1 control-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukan Alamat Pegawai..." required></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>

		<!-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data"> -->
	</form>
@endsection
