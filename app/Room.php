<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
     protected $fillable = ['roomId','roomDesc','active','remark'];
     protected $primaryKey='roomId';
}
