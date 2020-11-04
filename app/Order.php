<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_name', 'phone', 'email', 'address', 'date','qty', 'menu_id', 'status', 'messages'  
    ];
}
