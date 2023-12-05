@extends('master2')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Pegawai</h3>

    <a href="/pegawai" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>
    <br/>

    <div class="row">
        <div class="col-6 bg-light">
            <!-- Foto -->
        </div>
    
        <div class="col-6">
            @foreach($pegawai as $p)
            <form method="get">
                <div class="form-group">
                    <label for="nama" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                        <input name="nama" type="text" class="form-control" id="nama" value="{{ $p->pegawai_nama }}" readonly>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                        <input name="jabatan" type="text" class="form-control" id="jabatan" value="{{ $p->pegawai_jabatan }}" readonly>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="umur" class="col-sm-2 control-label">Umur</label>
                    <div class="col-sm-10">
                        <input name="umur" type="text" class="form-control" id="umur" value="{{ $p->pegawai_umur }}" readonly>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="alamat" readonly>{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="/pegawai" class="form-control btn btn-primary">Ok</a>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>    
@endsection