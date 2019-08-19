<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seat';

    protected $fillable = ['name','type','desc','room_id'];

    public $timestamps = false;

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }
}
