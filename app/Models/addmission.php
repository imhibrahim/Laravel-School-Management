<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addmission extends Model
{
    function user(){
        
        return $this->belongsTo(User::class);
    }

     function course(){
        
        return $this->belongsTo(course::class);
    }
}
