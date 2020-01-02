<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'akademik';
    public function matakuliah()
    {
        // $q = \DB::select(['D.nama_matakuliah as D.nama_matakuliah','E.nama_kelas as E.nama_kelas',
        // 'B.nama_dosen as B.nama_dosen','C.semester as C.semester']);
        //      $q->where('A.id_dosen', '=', B.id_dosen);
        //      $q->where('A.id_matakuliah', '=', D.id_matakuliah);
        //      $q->where('A.id_semester', '=', C.id_semester);
        //      $q->where('A.id_kelas', '=', E.id_kelas);
        //      $q->get();

        $q = DB::table('akademik')
                -> join('matakuliah', 'akademik.id_matakuliah', 'matakuliah.id_matakuliah')
                -> join('dosen', 'akademik.id_dosen', 'dosen.id_dosen')
                -> join('kelas', 'akademik.id_kelas', 'kelas.id_kelas')
                -> join('semester', 'akademik.id_semester', 'semester.id_semester')
                ->;
        
        return $q;
        // $response = json_decode($q);
        // return $response->$q;
    }

}