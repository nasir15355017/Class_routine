<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    protected $fillable=[
        'id','course_title','course_code','credit','type'
    ];
}
