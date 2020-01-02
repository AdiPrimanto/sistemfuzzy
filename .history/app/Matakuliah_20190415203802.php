<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'akademik';
    public function matakuliah()
    {
        $q = D,::select(['D.nama_matakuliah as D.nama_matakuliah','E.nama_kelas as E.nama_kelas','B.nama_dosen as B.nama_dosen','C.semester as C.semester'])
             $q->where('A.id_dosen', '=', B.id_dosen)
             $q->where('A.id_matakuliah', '=', D.id_matakuliah)
             $q->where('A.id_semester', '=', C.id_semester)
             $q->where('A.id_kelas', '=', E.id_kelas);
             $q->get();
    }
    // protected $primaryKey = 'id_akademik';
    // protected $fillable = ['id_matakuliah', 'id_dosen', 'id_kelas', 'id_semester'];
    // public $timestamps = false; //menginformasika ke laravel tdk memakai migration

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'id_akademik');
    // }
}