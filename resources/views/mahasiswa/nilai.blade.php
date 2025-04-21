@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Nilai Mahasiswa: {{ $mahasiswa->nama }}</h2>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $i => $n)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $n->nama }}</td>
                <td>{{ $n->sks }}</td>
                <td>{{ $n->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/" class="btn btn-secondary">Kembali</a>
</div>
@endsection
