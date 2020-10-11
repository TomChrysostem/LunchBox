<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = [
        'user_name', 'phone', 'email', 'address', 'date','qty', 'course_id', 'messages'  
    ];
}
