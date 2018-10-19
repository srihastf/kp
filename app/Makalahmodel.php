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
        'pemeriksa1','pemeriksa2','tgldaftarawal','acckakptf','accpsubidkapok','accpkabid',
        'tglterimap1','tglterimap2','tglaccp1','tglaccp2',
        'statusp1','statusp2','ttdkakptf','tglselesai','arsip'
    ];
}
