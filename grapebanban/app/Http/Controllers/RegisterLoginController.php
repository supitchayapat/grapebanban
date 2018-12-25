<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Redirect;

use Hash;
use Auth;

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
        $User->password = Hash::make($req->firstname);
        $User->firstname = $req->firstname ;
        $User->surname = $req->surname ;
        // $User->discount_privilage = $email; 
        $User->save();

        
        return response ("success");
        
    }

    
  

    public function getSignOut() {
		
        Auth::logout();
        return redirect('/home');
        
    }

}
