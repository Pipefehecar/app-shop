<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationImage extends Model
{
    //$publicationImage->publication
    public function publication(){
    	return $this->belongsTo(Publication::class);
    }
    public function getUrlAttribute(){//esto es un assesor de campos(atributos) calculados
    	if(substr($this->image,0,4 )=="http"){

    		return $this->image;
    	}
   		
   		return '/images/publication/'.$this->image; 
    }

}
