@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Mahasiswa</h2>
    <table class="table table-bordered mt-3">
        <thead class="table-light">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
            <tr>
                <td>{{ $m->nim }}</td>
                <td>{{ $m->nama }}</td>
                <td>{{ $m->jurusan }}</td>
                <td>
                    <a href="/mahasiswa/{{ $m->id }}/nilai" class="btn btn-sm btn-primary">Nilai</a>
                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
