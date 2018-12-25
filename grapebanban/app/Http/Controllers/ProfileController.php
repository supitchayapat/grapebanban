<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Auth;




class ProfileController extends Controller
{
   
    public function getuser()
    {

        $User = User::where('user_id'==Auth::user()->user_id)->get();

        return response ()->json ( $User );
        
    }


    public function edituser(Request $req)
    {

       
        $User = new User;
       

        if($req->password!=null){

            $User->password =  bcrypt($req->password);
          }
        $User->firstname = $req->firstname;
        $User->surname = $req->surname;
        $User->save();
      

        return response ("success");

        
    }



}
