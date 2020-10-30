<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course', 'image', 'description','price','qty','period','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function attendees()
    {
        return $this->belongsToMany('App\Models\Attendee')->withTimestamps();
    }
}
