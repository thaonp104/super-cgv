<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';

    protected $fillable = ['name','type','leng','release_date','director','trang_thai','image','rated','des'];

    public $timestamps = false;

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    }

    public function room()
    {
        return $this->belongsToMany('App\Room', 'schedule');
    }

    public function getCinemaName($idFilm){
        
    }
}
