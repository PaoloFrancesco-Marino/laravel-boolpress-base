<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    // mass assing
    protected $fillable = [
        'user_id',
        'phone',
        'avatar',
        'city',
        'country'
    ];

    public $timestamps = false;
    // relations one to one
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
