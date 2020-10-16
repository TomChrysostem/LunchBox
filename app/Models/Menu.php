<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['menu', 'image', 'description','price','date','kcal','menu_type','dish','category_id'];

    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }
}