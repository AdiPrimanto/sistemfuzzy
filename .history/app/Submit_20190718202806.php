<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    protected $table = 'hasil_kuisioner';
    protected $primaryKey = 'id_hasil_kuisioner';

    protected $fillable = [
    	'id_hasil_kuisioner',
    	'id_akademik',
		'p1',
		'p2',
		'p3',
		'p4',
		'p5',
		'p6',
		'p7',
        'p8',
        'p9',
        'p10',
        'p11',
        'p12',
        'p13',
        'p14',
        'p15',
        'semester',
    ];
    public $timestamps = false;
}
