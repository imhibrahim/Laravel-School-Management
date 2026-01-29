<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\addmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class historyController extends Controller
{
    function userhistory(){

        $data=addmission::with(['user','course'])->where('user_id',Auth::user()->id)->get();
     
        return view('User.history',compact('data'));
    }
}
