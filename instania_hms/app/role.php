<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $fillable =[
      'rolename'
    ];
    protected $table='roles';
}
