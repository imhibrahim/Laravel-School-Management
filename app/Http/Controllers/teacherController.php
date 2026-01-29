<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\teacher;
use Illuminate\Http\Request;

class teacherController extends Controller
{
    function insert(){
        $course=course::all();
        return view('Admin.addteacher',compact('course'));
    }


    function addteacher(Request $req){
        $data=$req->validate([
            'name'=>"required",
            'age'=>"required",
            'qualification'=>"required",
            'course_id'=>"required",
        ]);

$teacher=new teacher();
$teacher->name=$data['name'];
$teacher->age=$data['age'];
$teacher->qualification=$data['qualification'];
$teacher->course_id=$data['course_id'];
$teacher->save();
if($teacher){
    return redirect()->route('fatchtecher')->with('success',"Teacher Added.....");
}
else{
     return redirect()->route('insertTecher')->with('error',"Teacher not  Added.....");
}
    }


function fatch(){

    $data=teacher::with('course')->get();

    return view('Admin.teacher',compact('data'));
}


function delete($id){

    $result=teacher::destroy($id);
    if($result){
          return redirect()->route('fatchtecher')->with('success',"Teacher Is Deleted...");
    }

}


function edit($id){
    $data=teacher::find($id);
    $course=course::all();
    return view('Admin.editTeacher',compact('data','course'));
}

function update(Request $req, $id){

    $tec=teacher::find($id);
    $tec->name=$req['name'];
    $tec->age=$req['age'];
$tec->qualification=$req['qualification'];
$tec->course_id=$req['course_id'];
$tec->save();


if($tec){
    return redirect()->route('fatchtecher')->with('success',"Teacher Updated.....");
}
else{
     return redirect()->route('insertTecher')->with('error',"Teacher not  Updated.....");
}

}

}
