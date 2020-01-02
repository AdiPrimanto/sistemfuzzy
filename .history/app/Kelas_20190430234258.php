<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_matakuliah';
    protected $fillable = ['nama_kelas'];
    public $timestamps = false;
}
