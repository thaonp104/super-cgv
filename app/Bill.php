<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';

    protected $filltable = ['payment_date','payment_type','quantity','client_id','member_id'];

    public $timestamps = false;
}
