<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';

    protected $fillable = ['payment_date','payment_type','quantity','client_id','member_id'];

    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    public function ticket()
    {
        return $this->hasMany('App\Ticket');
    }
}
