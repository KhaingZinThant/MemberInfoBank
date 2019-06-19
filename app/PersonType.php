<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
     protected $fillable=['personId','personDesc','active','remark'];
     protected $primaryKey='personId';
}
