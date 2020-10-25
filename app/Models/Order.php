<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_name', 'phone', 'email','address','date','qty','menu_id','messages','status'];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }

}