<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
class ProductController extends Controller
{
   public function show($id){
   		$publication = Publication::find($id);
   		$images = $publication->images;
    return view('publications.show')->with(compact('publication','images'));
   	// return "Mostrar datos del producto con id: ".$id;
   }
}
