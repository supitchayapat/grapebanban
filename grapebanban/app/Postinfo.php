<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postinfo extends Model
{
    //
    protected $fillable = ['postinfo_id','firstname','surname','address','subdistrict','district','province','postcode'];

    protected $primaryKey = 'postinfo_id';

    protected $table = 'Postinfo';


 
}
