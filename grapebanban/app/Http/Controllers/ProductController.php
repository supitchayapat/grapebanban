<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use View;

class ProductController extends Controller
{
   
    public function index()
    {

    $Product = Product::select('product_name')->distinct()->get();

      
        // return View::make('/')->with(compact('Product'));



        $dataall = array(
            'Product' =>   $Product,
    
        );
    return view('home.index',$dataall);
    }

    // public function Shopping_item()
    // {

   
        
    // }


}
