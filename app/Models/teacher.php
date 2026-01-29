<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    

    public function course(){
 
        return $this->belongsTo(course::class);

    }


}
