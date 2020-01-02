<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'akademik';
    protected $fillable = ['id_matakuliah', 'id_dosen', 'id_kelas', 'semecter'];
    // protected $fillable = ['nama_matakuliah', 'nama_dosen', 'nama_kelas', 'semecter'];
    public function matakuliah()
    {
        $q = \DB::table('akademik')
                -> join('matakuliah', 'akademik.id_matakuliah', 'matakuliah.id_matakuliah')
                -> join('dosen', 'akademik.id_dosen', 'dosen.id_dosen')
                -> join('kelas', 'akademik.id_kelas', 'kelas.id_kelas')
                -> join('semester', 'akademik.id_semester', 'semester.id_semester')
                -> select('akademik.*', 'matakuliah.nama_matakuliah', 'dosen.nama_dosen', 'kelas.nama_kelas', 
                'semester.semester')
                -> get();
        
        return $q;
        // $response = json_decode($q);
        // return $response->$q;
    }

}