<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationYear extends Model
{
     protected $fillable = ['educationYearDesc','active','remark'];
    protected $primaryKey = 'educationYearId';
}
