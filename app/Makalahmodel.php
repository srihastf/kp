<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makalahmodel extends Model
{
    protected $table = 'makalah';
    protected $primaryKey = 'nomormakalah';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'nomormakalah','kodesnt','kodekti',
        'subidnkelompok','judulmakalah','tujuan','penulis',
        'tgldaftarawal','accpsubidkapok','accpkabid',
        'tglkesekertaris','tglkekakptf','pemeriksa1','pemeriksa2',
        'acckakptf','tglterimap1','cttp1','tglaccp1','statusp1','tgltrmsekertarisp1',
        'tglterimap2','cttp2','tglaccp2','statusp2','tgltrmsekertarisp2',
        'ttdkakptf','tglselesai','arsip'
    ];
}
