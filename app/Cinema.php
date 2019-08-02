<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinema';

    protected $filltable = ['name','adddress','desc','hotline'];

    public $timestamps = false;
}
