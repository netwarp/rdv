<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
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
}