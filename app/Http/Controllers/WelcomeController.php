<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function getAkademik(Request $request)
    {
        $akademik = DB::table('akademik')
                    -> select(['akademik.id_matakuliah', 'nama_matakuliah'])
                    -> join('matakuliah','akademik.id_matakuliah', '=', 'matakuliah.id_matakuliah')
                    -> groupBy('akademik.id_matakuliah')
                    ->get();
        return view('welcome',compact('akademik'));
    }

    public function selectAjax(Request $request)
    {
        $id_matakuliah = $request->input('id_matakuliah');
        $kelas = DB::table('akademik as t1')
                 ->join('kelas as t2','t1.id_kelas','=','t2.id_kelas')
                 ->where('t1.id_matakuliah', $id_matakuliah)
                 ->get();
        $output = [];
        foreach( $kelas as $kelas )
        {
            $output[$kelas->id_kelas] = $kelas->nama_kelas;
        }
        return $output;
    }

    public function selectAjax2(Request $request)
    {
        $id_matakuliah = $request->input('id_matakuliah');
        $id_kelas = $request->input('id_kelas');
        $dosen = DB::table('akademik as t1')
                 ->distinct('t2.id_dosen, t2.nama_dosen')
                 ->join('dosen as t2','t1.id_dosen','=','t2.id_dosen')
                 ->where('t1.id_matakuliah', $id_matakuliah)
                 ->where('t1.id_kelas', $id_kelas)
                 ->get();
        $output = [];
        foreach( $dosen as $dosen )
        {
            $output[$dosen->id_dosen] = $dosen->nama_dosen;
        }
        return $output;
    }

    public function selectAjax3(Request $request)
    {
        $id_matakuliah = $request->input('id_matakuliah');
        $id_kelas = $request->input('id_kelas');
        $id_dosen = $request->input('id_dosen');
        $semester = DB::table('akademik as t1')
                 ->distinct('t2.id_semester, t2.semester')
                 ->join('semester as t2','t1.id_semester','=','t2.id_semester')
                 ->where('t1.id_matakuliah', $id_matakuliah)
                 ->where('t1.id_kelas', $id_kelas)
                 ->where('t1.id_dosen', $id_dosen)
                 ->get();
        $output = [];
        // echo $semester;
        foreach( $semester as $semester )
        {
            $output[$semester->id_semester] = $semester->semester;
        }
        return $output;
    }

    // public function selectAjax($id)
    // {
    //     $kelas = DB::table('akademik')->where('id_matakuliah', $id)
    //             -> select(['akademik.id_matakuliah', 'nama_kelas'])
    //             -> join('kelas','akademik.id_kelas', '=', 'kelas.id_kelas')
    //             ->get();
    //     $output = [];
    //     foreach( $kelas as $kelas )
    //     {
    //         // $output[$kelas->id_kelas] = $kelas->id_kelas;
    //         $output[$kelas->nama_kelas] = $kelas->nama_kelas;
    //     }
    //     return $output;
    // }

    // public function selectAjax2($id)
    // {
    //     $kelas = DB::table('akademik')->where('id_matakuliah', $id)
    //             -> select(['akademik.id_matakuliah', 'nama_dosen'])
    //             -> join('dosen','akademik.id_dosen', '=', 'dosen.id_dosen')
    //             ->get();
    //     $output = [];
    //     foreach( $dosen as $dosen )
    //     {
    //         $output[$dosen->nama_dosen] = $dosen->nama_dosen;
    //     }
    //     return $output;
    // }

}
