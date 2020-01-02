<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('admin.matakuliah', compact('matakuliah'));
    }
}
