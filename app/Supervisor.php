<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
     protected $fillable=['supervisorDesc','supervisorPhno','supervisorEmail','supervisorAddress','active','remark'];
      protected $primaryKey='supervisorId';
}
