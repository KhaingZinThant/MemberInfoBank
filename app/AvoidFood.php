<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvoidFood extends Model
{
    protected $fillable=['avoidFoodId','avoidFoodDesc','active','remark'];
    protected $primaryKey='avoidFoodId';
}
