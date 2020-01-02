<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class SemesterController extends Controller
{
    public function index()
    {
        $semester = Semester::all();
        return view('admin.semester', compact('kelas'));
    }
}
