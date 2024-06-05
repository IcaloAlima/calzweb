<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => "maman", 'foto' => "m4n.jpg"];
        $prodi = Prodi::all();
        return view ('prodi.index', compact(['data', 'prodi']));
    }

    public function create()
    {
        $data = ['nama' => "maman", 'foto' => "m4n.jpg"];
        $prodi = Prodi::all();
        return view ('prodi.index', compact(['data', 'prodi']));
    }
}
