<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbaikanmodel extends Model
{
    protected $table = 'perbaikan';
    protected $primaryKey = 'idperbaikan';
    public $incrementing = true;
    public $timestamp = false;

    public $fillable = [
        'idperbaikan','nomormakalah','tglperiksap1','tglperiksap2','tglselesaip1','tglselesaip2','statusp1','statusp2',
    ];
}
