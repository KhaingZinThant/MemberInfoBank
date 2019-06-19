<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['educationId','educationDesc','active','remark'];
    protected $primaryKey = 'educationId';
}
