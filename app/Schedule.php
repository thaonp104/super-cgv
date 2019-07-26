<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';

    protected $filltable = ['start_time','end_time','date','room_id','film_id'];

    public $timestamps = false;
}
