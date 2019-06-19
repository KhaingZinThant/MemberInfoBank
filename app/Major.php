<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable=['majorDesc','active','remark'];
    protected $primaryKey='majorId';
}

