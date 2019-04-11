<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $primaryKey = 'idparticipants';

    public function attendances(){
		  return $this->hasMany(Attendance::class);
	}
}
