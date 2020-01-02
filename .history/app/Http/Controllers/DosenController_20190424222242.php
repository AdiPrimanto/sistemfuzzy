<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('admin.matakuliah', compact('matakuliah'));
    }
}
