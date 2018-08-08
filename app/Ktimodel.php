<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ktimodel extends Model
{
    protected $table = 'kti';
    protected $primaryKey = 'kodekti';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'kodekti','jeniskti',
    ];
}
