<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Nasabah extends Authenticatable
{
    protected $table = 'nasabah';

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
