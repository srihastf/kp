<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawaimodel extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
    	'nip','namapegawai','golongan','pendidikanakhir','jurusan','jabatan','status',
    ];
}
