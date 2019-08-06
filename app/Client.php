<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
<<<<<<< HEAD

    protected $fillable = ['id_card','name','phone','address','email'];

=======
>>>>>>> b2ac90f8fbd9c5ada2ec670ca57a3a57d688b76c
    public $timestamps = false;
}
