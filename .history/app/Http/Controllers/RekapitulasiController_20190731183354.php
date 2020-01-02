<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RekapitulasiController extends Controller
{
    public function index()
    {
        $data1 = DB::select('select * from rekapitulasi where semester = "GANJIL" ORDER BY z ASC');
        $data1 = json_decode(json_encode($data1), True);
        $data2 = DB::select('select * from rekapitulasi where semester = "GENAP" ORDER BY z DESC');
        $data2 = json_decode(json_encode($data2), True);

        $chartGanjil = DB::select('select hasil, count(id_rekapitulasi) as jumlah from rekapitulasi where semester = "GANJIL" GROUP by hasil');
        $chartGanjil = json_decode(json_encode($chartGanjil), True);

        $chartGenap = DB::select('select hasil, count(id_rekapitulasi) as jumlah from rekapitulasi where semester = "GENAP" GROUP by hasil');
        // $dataChartGenap = [];
        // foreach ($chartGenap as $data) {
        //     $dataChartGenap['label'] = array_push($dataChartGenap['label'],$data['hasil']);
        //     $dataChartGenap['data'] = array_push($dataChartGenap['jumlah'],$data['jumlah']);
        // }
        // $dataChartGenap = json_decode(json_encode($dataChartGenap), True);
        // echo print_r($dataChartGenap);
        $chartGenap = json_decode(json_encode($chartGenap), True);
        return view('admin.rekapitulasi', compact('data1', 'data2', 'chartGanjil', 'chartGenap'));
    }
}