<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category','description'];


    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }
}