<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //$type->publication
    public function publications(){
    	 return $this->hasMany(Publication::class);
    }  
}
