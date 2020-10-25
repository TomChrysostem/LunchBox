<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = ['user_name', 'phone', 'email', 'address', 'date','qty', 'messages'];

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }
}
