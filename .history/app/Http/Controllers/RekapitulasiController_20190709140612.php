<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Akademik;
use App\Matakuliah;
use App\Kelas;
use App\Dosen;
use App\Semester;

class RekapitulasiController extends Controller
{
    public function index()
    {
        return view('admin.rekapitulasi')->withData($data);
    }
}
