@extends('master2')
@section('title', 'Database Nilai')

    @section('judul_halaman')
	<h2>www.malasngoding.com</h2>
	<h3>Database Nilai</h3>

	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>

	<br/>
	<br/>
    @endsection

    @section('konten')
    @php
        function angkaToHuruf($nilai){
            if ($nilai >= 81 && $nilai <= 100) {
                return 'A';
            } elseif ($nilai >= 61 && $nilai <= 80) {
                return 'B';
            } elseif ($nilai >= 41 && $nilai <= 60) {
                return 'C';
            } elseif ($nilai >= 0 && $nilai <= 40) {
                return 'D';
            } else {
                return 'Nilai tidak valid';
            }
        }
    @endphp


    <div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID}}</td>
			<td>{{ $n->NRP}}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>

            <td>{{ angkaToHuruf($n->NilaiAngka) }}</td>
            <td>{{$n->NilaiAngka * $n->SKS }}</td>
			{{-- <td class="d-flex">
                <a href="/nilaikuliah/view/{{ $p->nilaikuliah_id }}"  class="btn btn-success m-1">View</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
    </div>
    
{{$nilaikuliah-> links()}}
@endsection
