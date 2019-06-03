<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
     protected $fillable = ['id','countries_id','name'];
     protected $primaryKey='id';
}
