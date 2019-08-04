<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_time_slot extends Model
{
    protected $table='class_time_slots';
    protected $fillable=[
        'id','start_time','end_time'
    ];
}
