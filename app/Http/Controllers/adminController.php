<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\addmission;
use App\Models\course;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        $user=User::count();
        $teacher=teacher::count();
        $course=course::count();
        $addmission=addmission::count();
        return view("Admin.index",compact('user','teacher','course','addmission'));
    }


    function getuser(){

        $alluser=User::all();

        return view('Admin.alluser',compact("alluser"));
    }


    function deleteUser($id){

        $result=User::destroy($id);
        if($result){
            return redirect()->route('alluser')->with("success","User Data Is Deleted");
        }
        else{
              return redirect()->route('alluser');
        }
    }

}
