<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semester';
    
    protected $fillable = ['nama_matakuliah'];
    public $timestamps = false;
}
