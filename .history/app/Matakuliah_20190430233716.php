<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'id_hasil_kuisioner';
    protected $fillable = ['nama_matakuliah'];
    public $timestamps = false;
}
