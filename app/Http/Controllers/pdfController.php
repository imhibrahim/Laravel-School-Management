<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use Barryvdh\DomPDF\Facade\Pdf;
 use App\Models\addmission;
 use Illuminate\Support\Facades\Auth;

class pdfController extends Controller
{
    function pdf($id){
    $history=addmission::with(['user','course'])->where('user_id',Auth::id())->where('id',$id)->get();

    $data=[
"title"=>"Student Addmission History Data",
"date"=>date('d/m/y'),
"history"=>$history
    ];
   $pdf = Pdf::loadView('User.pdf', $data);
    return $pdf->download('MyHistory.pdf');
    }
}
