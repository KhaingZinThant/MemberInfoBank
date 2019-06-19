<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $fillable = ['userId','userName','password'];
     protected $primaryKey='nameId';
}

