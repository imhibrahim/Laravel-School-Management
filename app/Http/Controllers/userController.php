<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\course;
use Illuminate\Http\Request;

class userController extends Controller
{
    function index(){
$course=course::limit(3)->get();
        return view('User.index',compact('course'));
    }




    function fatch($id){

        $detail=course::find($id);
        return view('User.detail',compact('detail'));
    }

}
