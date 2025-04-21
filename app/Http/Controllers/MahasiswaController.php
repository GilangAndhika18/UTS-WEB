<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
{
    $mahasiswa = DB::table('mahasiswa')->get();
    return view('mahasiswa.index', compact('mahasiswa'));
}

public function showNilai($id)
{
    $mahasiswa = DB::table('mahasiswa')->where('id', $id)->first();
    $nilai = DB::table('nilai')
        ->join('mata_kuliah', 'nilai.mata_kuliah_id', '=', 'mata_kuliah.id')
        ->where('nilai.mahasiswa_id', $id)
        ->select('mata_kuliah.nama', 'mata_kuliah.sks', 'nilai.nilai')
        ->get();
    return view('mahasiswa.nilai', compact('mahasiswa', 'nilai'));
}

}
