<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
     protected $fillable = ['id','name'];
     protected $primaryKey='id';
}
