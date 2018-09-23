<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //$publication->category
    public function type(){
    	return $this->belongsTo(Type::class);
    }
    // $publication->images
    public function images(){
    	return $this->hasMany(PublicationImage::class);
    }
    public function users()
    {
        return $this->belongsToMany('App\User','favorite')
                ->withTimestamps();
    }


    public function getFeaturedImageUrlAttribute(){
    	$featuredImage = $this->images()->where('featured',true)->first();
    	if(!$featuredImage)
    		$featuredImage = $this->images()->first();

    	if($featuredImage){
    		return $featuredImage->url;
    	}

    	//default
    	return '/images/publication/default.gif';
    }
}
