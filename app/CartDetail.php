<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
	//cart detail N-----------1 product //el cartDetail se asocia a un producto determinado

    public function product(){
    	return $this->belongsTo(Product::class);
    }
   
}
