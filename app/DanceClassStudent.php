<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanceClassStudent extends Model
{
   public $table = 'danceclassstudent';
   protected $fillable = ['name','age','typeofdance','levelofdance','contactnumber'];
}
