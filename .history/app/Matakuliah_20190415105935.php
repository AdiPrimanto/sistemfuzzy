<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'akademik';
    public function matakuliah()
    {
        $matakuliah = DB::table('akademik')
            -> join('matakuliah','akademik.id_matakuliah', '=', 'matakuliah.id_matakuliah')
            -> join('dosen','akademik.id_dosen', '=', 'dosen.id_dosen')
            -> join('kelas','akademik.id_kelas', '=', 'kelas.id_kelas')
            -> join('semester','akademik.id_semester', '=', 'semester.id_semester')
            ->get();
    }
    // protected $primaryKey = 'id_akademik';
    // protected $fillable = ['id_matakuliah', 'id_dosen', 'id_kelas', 'id_semester'];
    // public $timestamps = false; //menginformasika ke laravel tdk memakai migration

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'id_akademik');
    // }
}