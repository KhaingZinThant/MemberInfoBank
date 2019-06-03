<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
     protected $fillable = ['personId','personName','country','state'];
     protected $primaryKey='personId';
}
