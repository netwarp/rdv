<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Post extends Eloquent
{
    /*
    protected $table = 'posts';
    
    protected  $fillable = [
        'title',
        'slug',
        'image',
        'tags',
        'preview',
        'content',
        'status',
        'created_at',
        'updated_at',
    ];

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
    */
    protected $connection = 'mongodb';
    protected $collection = 'posts_collection';
}