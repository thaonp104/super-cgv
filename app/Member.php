<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $filltable = ['username','password','fullname','role'];

    public $timestamps = false;
}