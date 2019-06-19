<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    protected $fillable=['userLevel','active','remark'];
    protected $primaryKey='personId';
}
