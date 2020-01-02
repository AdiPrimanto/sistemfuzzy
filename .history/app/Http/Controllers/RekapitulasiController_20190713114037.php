<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RekapitulasiController extends Controller
{
    public function index()
    {
        $data1 = DB::select('select * from rekapitulasi where semester = "GANJIL" ORDER BY z DESC');
        $data1 = json_decode(json_encode($data1), True);
        $data2 = DB::select('select * from rekapitulasi semester = "GENAP" ORDER BY z DESC');
        $data2 = json_decode(json_encode($data2), True);

        return view('admin.rekapitulasi')->withData($data1, $data2);
    }
}
