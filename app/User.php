<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

//class User extends Authenticatable implements MustVerifyEmail
class User extends Eloquent
{
    /*
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'description', 'data'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    */
}
