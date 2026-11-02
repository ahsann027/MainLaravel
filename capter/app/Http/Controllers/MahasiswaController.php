<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nim' => '250210500011', 'nama' => 'Ahmad Ahsan', 'jurusan' => 'Teknik Komputer'],
            ['nim' => '250210500012', 'nama' => 'Dirgy Alfarezi', 'jurusan' => 'Teknik Komputer'],
            ['nim' => '250210500013', 'nama' => 'Jefferson Joshua Slay', 'jurusan' => 'Teknik Komputer'],
            ['nim' => '250210500014', 'nama' => 'Muh. Ikhsan', 'jurusan' => 'Teknik Komputer'],
        ];

        return view('mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}