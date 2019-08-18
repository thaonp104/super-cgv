<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';

    protected $fillable = ['name','type','leng','release_date','director','trang_thai','image','rated','des'];

    public $timestamps = false;


}
