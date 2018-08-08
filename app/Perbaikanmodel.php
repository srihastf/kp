<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbaikanmodel extends Model
{
    protected $table = 'perbaikan';
    protected $primaryKey = 'idperbaikan';
    public $incrementing = false;
    public $timestamp = false;

    public $fillable = [
        'idperbaikan','nomormakalah','nopemeriksa','pemeriksa','tglselesaiperiksa','filerevisi','tglselesaiperbaikan','fileperbaikan',
    ];
}
