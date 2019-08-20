<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $fillable = ['name','desc','cinema_id'];

    public $timestamps = false;

    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }

    public function seat()
    {
        return $this->hasMany('App\Seat');
    }
}
