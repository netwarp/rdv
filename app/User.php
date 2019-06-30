<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
#use Illuminate\Foundation\Auth\User as Authenticatable;

use Jenssegers\Mongodb\Auth\User as Authenticatable;

//class User extends Authenticatable implements MustVerifyEmail
class User extends Authenticatable
{
    protected $connection = 'mongodb';

    protected $collection = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'description', 'data',
        'ads', 'rates', 'rates_percent',
    ];
    /*
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'description', 'data'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    */

    public function ads() {
        return $this->hasMany('Ad');
    }
}
