<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekapitulasi extends Model
{
    protected $table = 'rekapitulasi';
    protected $primaryKey = 'id_rekapitulasi';
    protected $fillable = ['nama_matakuliah'];
    public $timestamps = false;
}
