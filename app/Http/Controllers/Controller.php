<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $a = [];
    public function aa()
    {
        $kuis = new KuisionerController();
        return $kuis->abc();
    }

    public function SimpanHasilFuzzy()
    {
        $kuis = new KuisionerController();
        $data = $kuis->abc();
        foreach($data as $value)
        {
            // DB::delete('delete from rekapitulasi where id_rekapitulasi is not null');
            DB::insert('insert into rekapitulasi (nama_matakuliah, nama_dosen, nama_kelas, semester,
            parameter1, parameter2, parameter3, max, z, hasil) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$value['matakuliah'], $value['dosen'], $value['kelas'], $value['semester'], $value['hasil1'],
            $value['hasil2'], $value['hasil3'], $value['max'][0][0], $value['max'][1],
            $value['max'][2]]);
        }
        // return json_encode($data[0]);
        return redirect('/dashboard')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function HapusHasilFuzzy()
    {
        $kuis = new KuisionerController();
        $data = $kuis->abc();
        DB::delete('delete from rekapitulasi where id_rekapitulasi is not null');
        return redirect('/dashboard')->with('success', 'Data Berhasil Dihapus');
    }
}