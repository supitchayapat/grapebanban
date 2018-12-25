<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;




class RegisterLoginController extends Controller
{
   



    public function registerc(Request $req)
    {

            $email =  $req->email;
         
          $ad =   explode('@',$email);
            if($ad[1]=="@คน.ไทย"){
                $email  = 1;
            }else{
                $email  = 0;
            }

        $User = new User();
        $User->email = $req->email;
        $User->password = bcrypt($req->password);
        $User->firstname = $req->firstname ;
        $User->surname = $req->surname ;
        $User->discount_privilage = $email; 
        $User->save();

        
        return response ("success");
        
    }


  



}
