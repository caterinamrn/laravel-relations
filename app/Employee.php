<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

      'firstname',
      'lastname',
      'location_id',
      'date_of_bith',
      'private_code'

    ];

    public function location(){
      
      return $this->belongsTo(Location::class);
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
