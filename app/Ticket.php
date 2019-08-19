<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';

    protected $fillable = ['price','seat_id','schedule_id','bill_id'];

    public $timestamps = false;

    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }

    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }

    public function bill()
    {
        return $this->belongsTo('App\Bill');
    }
}
