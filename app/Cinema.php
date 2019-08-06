<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $table = 'cinema';
<<<<<<< HEAD

    protected $fillable = ['name','adddress','desc','hotline'];

=======
    protected $fillable = ['name','address','desc','hotline'];
>>>>>>> b2ac90f8fbd9c5ada2ec670ca57a3a57d688b76c
    public $timestamps = false;
}
