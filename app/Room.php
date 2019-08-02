<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $filltable = ['name','total_seat','desc','cinema_id'];

    public $timestamps = false;
}
