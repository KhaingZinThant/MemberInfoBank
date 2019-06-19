<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonStatus extends Model
{
     protected $fillable=['statusDesc','active','remark'];
      protected $primaryKey='statusId';
}
