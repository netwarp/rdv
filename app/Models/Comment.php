<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   	protected $fillable = [
	    'name',
	    'email',
	    'content',
	    'ip',
	    'content',
	    'validated'
    ];

    public function getPost() {
        return $this->belongsTo('App\Models\Post');
    }
}
