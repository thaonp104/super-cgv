<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';

    protected $filltable = ['price','seat_id','schedule_id','bill_id'];

    public $timestamps = false;
}
