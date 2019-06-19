<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
     protected $fillable=['buildingId','buildingDesc','active','remark'];
     protected $primaryKey='buildingId';
}
