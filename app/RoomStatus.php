<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomStatus extends Model
{
    protected $fillable=['roomStatusDesc','active','remark'];
    protected $primaryKey='roomStatusId';
}

