<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RekapitulasiController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from rekapitulasi ORDER BY z DESC')
            ->;
        $data = json_decode(json_encode($data), True);
        return view('admin.rekapitulasi')->withData($data);;
    }
}
