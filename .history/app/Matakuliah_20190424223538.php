<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['id_matakuliah', 'nama_matakuliah', 'nama_kelas', 'semecter'];
    public $timestamps = false;
}
