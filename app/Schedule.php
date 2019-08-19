<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    protected $fillable = ['start_time','end_time','date','room_id','film_id'];

    public $timestamps = false;

    public function film()
    {
        return $this->belongsTo('App\Film');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }
}
