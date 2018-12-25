<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable = ['order_id','user_id','status','delivery','track_number','feedback','datetime','star'];

    protected $primaryKey = 'order_id';

    protected $table = 'order';


 
}
