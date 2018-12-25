<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['product_id','product_name','cost','detail','number_stock','region','out_of_stork_exp','unit','start_date'];

    protected $primaryKey = 'product_id';

    protected $table = 'Product';


 
}
