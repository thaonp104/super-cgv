<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Client extends Authenticatable
{
    protected $table = 'client';

    protected $fillable = ['id_card','name','phone','address','email'];

    public $timestamps = false;

    public function bill()
    {
        return $this->hasMany('App\Bill');
    }
}
