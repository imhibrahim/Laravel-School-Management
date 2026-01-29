<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\addmission;
use App\Models\course;
use Illuminate\Http\Request;

class enrollController extends Controller
{
    function form($id){
 $data=course::find($id);
 return view('user.enrollform',compact('data'));

    }


function addmission(Request $req){

$addmission=new addmission();
$addmission->user_id=$req['uid'];
$addmission->course_id=$req['cid'];
$addmission->DOB=$req['dob'];
$addmission->save();

if($addmission){
    return redirect()->route('history');
}
else{
    return "Error";
}

}


}
