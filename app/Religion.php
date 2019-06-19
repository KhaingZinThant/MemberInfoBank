<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Religion extends Model
{
    protected $fillable=['religionDesc','active','remark'];
    protected $primaryKey='religionId';
}

