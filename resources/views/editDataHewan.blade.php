@extends('master2')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Hewan</h3>

	<a href="/database-hewan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($hewan as $p)
	<form action="/database-hewan/update" method="post" class="form-horizontal">
		{{csrf_field()}}

        <div class="input-group mb-3">
            <label for="kodehewan" class="col-sm-2 control-label">Kode Hewan</label>
            <div class="col-sm-6">
                <input type="number" required="required" name="kodehewan" class="form-control" value="{{ $p->kodehewan}}" readonly>
            </div>
        </div>
        <div class="input-group mb-3">
            <label for="namahewan" class="col-sm-2 control-label">Nama Hewan</label>
            <div class="col-sm-6">
                <input type="text" required="required" name="namahewan" class="form-control" value="{{ $p->namahewan}}">
            </div>
        </div>
        <div class="input-group mb-3">
            <label for="jumlahhewan" class="col-sm-2 control-label">Jumlah Hewan</label>
            <div class="col-sm-6">
                <input type="number" required="required" name="jumlahhewan" class="form-control" value="{{ $p->jumlahhewan}}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>

	</form>
	@endforeach

@endsection
