<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
    use Notifiable;

    protected $guard = 'owner';

    protected $fillable = [
        'nama', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
