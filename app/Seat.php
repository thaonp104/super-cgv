<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seat';

    protected $filltable = ['name','type','desc','room_id'];

    public $timestamps = false;
}
