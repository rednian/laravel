<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
	protected $primaryKey  = 'l_id';

    protected $fillable = [
        'date', 'time_in', 'time_out','id'
    ];


    public function user()
    {
    	return $this->belongsTo(User::class);
    	
    }
}
