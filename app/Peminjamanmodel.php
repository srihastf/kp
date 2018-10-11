<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjamanmodel extends Model
{
    protected $table = 'pinjamkti';
    protected $primaryKey = 'idpinjam';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
    	'idpinjam','nomormakalah','nip','tglbooking','status','tglpinjam','tglkembali',
    ];
}
