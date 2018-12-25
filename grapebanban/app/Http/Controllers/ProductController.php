<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
   
    public function index()
    {

    $Product = Product::select('product_name')->distinct()->get();
dd($Product);
        return view('home/index',$Product);
    }

    // public function Shopping_item()
    // {

   
        
    // }


}
