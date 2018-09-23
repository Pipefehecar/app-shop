<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
class TestController extends Controller
{
	public function welcome()
	{
		$publications = Publication::paginate(9);
		return view('welcome')->with(compact('publications')); 
	}
    
    public function contact()
	{
		return view('contact'); 
	}
}
