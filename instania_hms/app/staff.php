<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
  protected $fillable =[
    'staffID','hospitalID','firstname','middlename','surname',
    'pos','email','password','number','gen','department'
  ];
}
