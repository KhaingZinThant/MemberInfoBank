<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
     protected $fillable=['careerDesc','active','remark'];
     protected $primaryKey='careerId';
}

