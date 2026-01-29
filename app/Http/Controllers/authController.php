<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\welcomemail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class authController extends Controller
{
    

    function registerpage(){
        return view('Auth.register');
    }



        function loginpage(){
        return view('Auth.login');
    }


    function registeruser(Request $req){


        $data=$req->validate([
            "name"=>"required",
            "email"=>"required|email|unique:users,email",
            "password"=>"required",
        ]);

$massage="Hello Dear ! Welcome To Our School Website";
$subject="User Registration Details";
Mail::to($req->email)->send(new welcomemail($massage,$subject,$req->email,$req->password));



        $user=User::create($data);

        if($user){
            return redirect()->route('loginpage')->with("success","User Register Succesfully.....");
        }

        else{
            return "Data Not Inserted";
        }
    }



    function loginuser(Request $req){

        $userinfo=$req->validate([
          "password"=>"required",
            "email"=>"required|email"
        ]);

        if(Auth::attempt($userinfo)){
            return redirect()->route("userpage");
        }
        else{
            return back()->with("error","User Mail or Password Incorrect...");
        }

       
    }


function logout(){

Auth::logout();
    return redirect()->route('loginpage');
  
  
}


}
