<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppingcart extends Model
{
    //
    protected $fillable = ['shopping_id','product_id','quantities','order_id'];

    protected $primaryKey = 'shopping_id';

    protected $table = 'shoppingcart';


 
}
