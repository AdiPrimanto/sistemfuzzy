<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class SemesterController extends Controller
{
    public function index()
    {
        $kelas = Semester::all();
        return view('admin.kelas', compact('kelas'));
    }
}
