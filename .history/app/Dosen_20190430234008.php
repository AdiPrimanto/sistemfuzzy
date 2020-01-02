<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id_matakuliah';
    protected $fillable = ['nama_dosen'];
    public $timestamps = false;
}
