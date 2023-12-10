@extends('master2')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Hewan</h3>

    <a href="/database-hewan" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    <br/>

    <div class="row">
        <div class="col-6 bg-light">
            <!-- Foto -->
        </div>
    
        <div class="col-6">
            @foreach($hewan as $p)
            <form method="get">
                <div class="form-group">
                    <label for="kodehewan" class="col-sm-4 control-label">Kode Hewan</label>
                    <div class="col-sm-10">
                        <input name="kodehewan" type="number" class="form-control" id="kodehewan" value="{{ $p->kodehewan}}" readonly>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="namahewan" class="col-sm-4 control-label">Nama Hewan</label>
                    <div class="col-sm-10">
                        <input name="namahewan" type="text" class="form-control" id="namahewan" value="{{ $p->namahewan}}" readonly>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="jumlahhewan" class="col-sm-4 control-label">Jumlah Hewan</label>
                    <div class="col-sm-10">
                        <input name="jumlahhewan" type="number" class="form-control" id="jumlahhewan" value="{{ $p->jumlahhewan}}" readonly>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="tersedia" class="col-sm-4 control-label">Apakah Tersedia?</label>
                    <div class="col-sm-10">
                        <input name="tersedia" type="text" class="form-control" id="tersedia" readonly value="{{ $p->tersedia == 'Y' ? 'Tersedia' : 'Tidak Tersedia' }}">
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="/database-hewan" class="form-control btn btn-primary">Ok</a>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>    
@endsection