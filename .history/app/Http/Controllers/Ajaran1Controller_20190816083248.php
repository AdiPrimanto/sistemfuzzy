<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajaran1Controller extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('admin.dosen', compact('dosen'));
    }
}
