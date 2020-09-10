<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $fillable = ['name','cover','description','price','no_of_people','period','menu_id','cat_id'];
}
