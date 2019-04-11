<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $primaryKey = 'idattendance';

    public function participant(){
		    return $this->belongsTo(Participant::class);
    }
}
