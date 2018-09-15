<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subbidmodel extends Model
{
    protected $table = 'subbidang';
    protected $primaryKey = 'kodesubid';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'kodesubid','kodesnt','namasubid',
    ];
}
