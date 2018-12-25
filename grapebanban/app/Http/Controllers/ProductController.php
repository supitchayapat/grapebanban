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
<<<<<<< HEAD
=======

>>>>>>> 28342b4ef271d7912afc3127963c7cf63f6983a0

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
