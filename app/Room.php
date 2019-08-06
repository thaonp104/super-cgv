<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

<<<<<<< HEAD
    protected $fillable = ['name','total_seat','desc','cinema_id'];

=======
>>>>>>> b2ac90f8fbd9c5ada2ec670ca57a3a57d688b76c
    public $timestamps = false;
}
