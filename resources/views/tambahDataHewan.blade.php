@extends('master2')


@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Hewan</h3>

	<a href="/database-hewan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/database-hewan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="input-group mb-3">
            <label for="namahewan" class="col-sm-2 control-label">Nama Hewan</label>
            <div class="col-sm-6">
                <input type="text" name="namahewan" class="form-control" id="namahewan" placeholder="Masukan Nama Hewan ..." required>
            </div>
        </div>

        <div class="input-group mb-3">
            <label for="jumlahhewan" class="col-sm-2 control-label">Jumlah Hewan</label>
            <div class="col-sm-6">
                <input type="number" name="jumlahhewan" class="form-control" id="jumlahhewan" placeholder="Masukan Jumlah Hewan ..." required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>

	</form>
@endsection
