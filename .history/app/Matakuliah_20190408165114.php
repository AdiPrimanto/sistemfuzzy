<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'akademik';
    // protected $primaryKey = 'id_akademik';
    // protected $fillable = ['id_matakuliah', 'id_dosen', 'id_kelas', 'id_semester'];
    // public $timestamps = false; //menginformasika ke laravel tdk memakai migration

    public function user()
    {
        return $this->belongsTo('App\User', 'id_akademik');
    }
}