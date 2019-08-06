<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = ['username','password','fullname','role'];

    public $timestamps = false;
}
