<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    protected $table = 'hasil_kuisioner';
    protected $primaryKey = 'id_hasil_kuisioner';

    protected $fillable = [
    	'id_hasil_kuisioner',
    	'nama_mahasiswa',
		'nim',
		'jurusan',
		'perguruan_tinggi',
		'tempat_lahir',
		'tanggal_lahir',
		'ipk',
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
