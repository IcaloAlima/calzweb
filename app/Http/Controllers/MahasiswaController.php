<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = ['nama' => "maman", 'foto' => "m4n.jpg"];
        $mahasiswa = DB::table('mahasiswa')->get();
    return view('mahasiswa',compact('data', 'mahasiswa'));
    }

    public function show($id)
    {

    }
}
