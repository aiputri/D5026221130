@extends('master2')
@section('title','Database Karyawan')

@section('judul_halaman')

	<h2>www.malasngoding.com</h2>
	<h3>Data Karyawan</h3>

	<br/>
	<br/>
@endsection

@section('konten')

<p>Cari Data Karyawan :</p>
	<form action="/karyawan/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Karyawan berdasarkan nama.." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary mt-4">
	</form><br/>

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    @if(session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endif

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai}}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
            <td>{{ $p->divisi }}</td>
            <td>{{ strtolower($p->departemen) }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $p->kodepegawai}}" class="btn btn-danger">Hapus Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$karyawan->links()}}

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>

@endsection
