<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    
    protected $fillable = [
        'id','name','nip', 'email','status', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
