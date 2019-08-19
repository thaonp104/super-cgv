<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    protected $fillable = ['id_card','name','phone','address','email'];

    public $timestamps = false;

    public function bill()
    {
        return $this->hasMany('App\Bill');
    }
}
