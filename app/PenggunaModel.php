<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggunaModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'nip';
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable = [
        'name','nip', 'email','status', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
