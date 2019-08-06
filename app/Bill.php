<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';
<<<<<<< HEAD

    protected $fillable = ['payment_date','payment_type','quantity','client_id','member_id'];

=======
>>>>>>> b2ac90f8fbd9c5ada2ec670ca57a3a57d688b76c
    public $timestamps = false;
}
