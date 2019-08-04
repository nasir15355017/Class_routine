<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teachers';
    protected $fillable=[
        'id','uid','name','short_name','department'
    ];
}
