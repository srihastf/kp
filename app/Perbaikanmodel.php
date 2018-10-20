<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbaikanmodel extends Model
{
    protected $table = 'perbaikan';
    protected $primaryKey = 'idperbaikan';
    public $incrementing = true;
    public $timestamps = false;

    public $fillable = [
        'idperbaikan','nomormakalah','tglperiksap1','tglperiksap2','tglperiksakapstnt',
        'tglselesaip1','tglselesaip2','tglselesaikapstnt','statusp1','statusp2','statuskapstnt'
    ];
}
