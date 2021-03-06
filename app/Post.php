<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'post',
        'slug'
    ];

    /**
     * DB relationship
    */

    // Post (many to one)
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // Post (one to many)
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    // Tag (many to many)
    public function tags() 
    {
        return $this->belongsToMany('App\Tag');
    }
}   
