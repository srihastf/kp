<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidangsntmodel extends Model
{
    protected $table = 'bidangsnt';
    protected $primaryKey = 'kodesnt';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'kodesnt','namabidang',
    ];
}
