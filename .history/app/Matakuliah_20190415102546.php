<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'akademik';
            -> join('matakuliah','akademik.id_matakuliah', '=', 'matakuliah.id_matakuliah')
            -> join('kelas','akademik.id_kelas', '=', 'kelas.id_kelas')
            ->where('nama_matakuliah', 'STATISTIKA')
            ->where('nama_kelas', '3')
            ->get();
    // protected $primaryKey = 'id_akademik';
    // protected $fillable = ['id_matakuliah', 'id_dosen', 'id_kelas', 'id_semester'];
    // public $timestamps = false; //menginformasika ke laravel tdk memakai migration

    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'id_akademik');
    // }
}