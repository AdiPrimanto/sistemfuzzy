<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seme;

class SemesterController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.kelas', compact('kelas'));
    }
}
