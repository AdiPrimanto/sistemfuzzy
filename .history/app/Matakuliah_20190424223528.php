<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['id', 'nama_dosen', 'nama_kelas', 'semecter'];
    public $timestamps = false;
}
