<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //$productImage->product
    public function product(){
    	return $this->belongsTo(Product::class);
    }
    public function getUrlAttribute(){//esto es un assesor de campos(atributos) calculados
    	if(substr($this->image,0,4 )=="http"){

    		return $this->image;
    	}
   		
   		return '/images/products/'.$this->image; 
    }

}
