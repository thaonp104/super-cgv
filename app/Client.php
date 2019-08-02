<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    protected $filltable = ['id_card','name','phone','address','email'];

    public $timestamps = false;
}
