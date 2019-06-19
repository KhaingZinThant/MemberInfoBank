<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $fillable=['floorDesc','active','remark'];
    protected $primaryKey='floorId';

}

