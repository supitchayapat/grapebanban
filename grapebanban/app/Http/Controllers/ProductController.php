<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use View;

class ProductController extends Controller
{
   
    public function index()
    {

    $Product = Product::select('*')->distinct()->get();



        $dataall = array(
            'Product' =>   $Product,
    
        );
    return view('home.index',$dataall);
    }

    // public function Shopping_item()
    // {

   
        
    // }


}
