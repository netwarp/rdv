<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';

    protected $casts = [
        'data' => 'array'
    ];
    /*
    protected $fillable = [
        'user_id',
        'data'
    ];
    */

    public function getUser() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
