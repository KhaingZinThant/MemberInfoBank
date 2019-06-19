<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $fillable=['nationalityDesc','active','remark'];
    protected $primaryKey='nationalityId';
}

