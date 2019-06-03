<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     protected $fillable = ['cityId','cityDesc','active','remark'];
     protected $primaryKey='cityId';
}
