@extends('master2')
@section('title','Database Hewan')

@section('judul_halaman')

	<h2>www.malasngoding.com</h2>
	<h3>Data Hewan</h3>

	<a href="/database-hewan/tambah" class="btn btn-primary"> + Tambah Hewan Baru</a>

	<br/>
	<br/>

@endsection

@section('konten')

<p>Cari Data Hewan :</p>
	<form action="/database-hewan/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Hewan berdasarkan nama.." value="{{ old ('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary mt-4">
	</form><br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Hewan</th><th>
			<th>Nama Hewan</th><th>
			<th>Jumlah Hewan</th><th>
			<th>Apakah Tersedia?</th><th>
            <th><th><th>
			<th>Opsi</th>
		</tr>
		@foreach($hewan as $p)
		<tr>
			<td>{{ $p->kodehewan}}</td><td>
			<td>{{ $p->namahewan}}</td><td>
			<td>{{ $p->jumlahhewan}}</td><td>
			<td style="text-align: center;">
                @if($p->tersedia == '1' && $p->jumlahhewan > '0')
                    <input type="checkbox" checked disabled style="background-color: blue;">
                @elseif($p->tersedia == '0')
                    <input type="checkbox" disabled style="background-color: orange;">
                @endif
            </td>
            <td><td><td><td>
			<td>
                <a href="/database-hewan/view/{{ $p->kodehewan}}" class="btn btn-success">View</a>

				<a href="/database-hewan/edit/{{ $p->kodehewan}}" class="btn btn-warning">Edit</a>

				<a href="/database-hewan/hapus/{{ $p->kodehewan}}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$hewan->links()}}

@endsection
