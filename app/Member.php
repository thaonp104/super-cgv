<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model{
    protected $table = 'member';
<<<<<<< HEAD

    protected $fillable = ['username','password','fullname','role'];

=======
>>>>>>> b2ac90f8fbd9c5ada2ec670ca57a3a57d688b76c
    public $timestamps = false;
}


