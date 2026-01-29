<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class courseController extends Controller
{


function insert(){
    return view('Admin.insertcourse');
}

function insertcourse(Request $req){

    $data=$req->validate([
        "name"=>"required",
        "desc"=>"required",
        "amount"=>"required",
        "pic"=>"required|image|mimes:jpg,jpeg,png,gif",
    ]);

    $file=$req->file('pic')->store("course","public");
    $path=basename($file);

    $course=new course();
    $course->name=$data['name'];
    $course->amount=$data['amount'];
    $course->desc=$data['desc'];
    $course->picture=$path;
    $course->save();

    if($course){
        return redirect()->route('fatchcourse')->with("success","1 Course Inserted.....");
    }
    else{
        return "Data Not Inserted";
    }
}


function fatch(){

$data=course::all();
    return view('Admin.course',compact('data'));
}


function delete($id){

    $result=course::destroy($id);

    if($result){
        return redirect()->route('fatchcourse')->with("success","Course Is Deleted....");
    }
    else{
         return redirect()->route('fatchcourse');
    }
 
}



function edit($id){

    $data=course::find($id);
    return view('Admin.editcourse',compact('data'));
}

function update(Request $req, $id){

    $course=course::find($id);
   $course->name=$req['name'];
   $course->desc=$req['desc'];
   $course->amount=$req['amount'];
if($req->hasfile('pic'
)){

$oldpath=storage_path("app/public/course/".$course->picture);

if(File::exists($oldpath)){File::delete($oldpath);}
  $file=$req->file('pic')->store("course","public");
    $path=basename($file);
    $course->picture=$path;
   $course->save();
   return  redirect()->route('fatchcourse')->with('success',"Course Data Is Updated with Image");

}

else{
   $course->save(); 
   return redirect()->route('fatchcourse')->with('success',"Course Data Is Updated without Image");
}


}


}
