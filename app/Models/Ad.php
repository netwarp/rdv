<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Ad extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'ads';

    public function user() {
        return $this->belongsTo('User');
    }
}
