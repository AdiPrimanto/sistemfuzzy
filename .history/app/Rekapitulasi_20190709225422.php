<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekapitulasi extends Model
{
    protected $table = 'rekapitulasi';
    protected $primaryKey = 'id_rekapitulasi';
    protected $fillable = ['id_rekapitulasi', 'max'];
    public $timestamps = false;
}
