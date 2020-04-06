<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $nama = 'Muhammad Royyan Zamzami';
        $materi = ["Pemrograman Web lanjut", "Proyek 1", "SMBD"];
        return view('biodata' , ['nama' => $nama, 'materi' =>$materi]);
    }
}
