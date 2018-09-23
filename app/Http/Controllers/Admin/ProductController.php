<?php

namespace App\Http\Controllers\Admin;

use App\http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Publication;
class ProductController extends Controller
{
    public function index(){
    	$publications = Publication::paginate(10);
    	return view('admin.products.index')->with(compact('publications'));//listado de productos
    }

    public function create(){
    	return view('admin.products.create');//formulario de registro de producto
    }

    public function store(Request $request){

    	//registrar el nuevo producto en la bd
    	// dd($request->all());

    	$publication = new Publication();
    	$publication->nombre = $request->input('nombre');
    	$publication->description = $request->input('description');
    	$publication->price = $request->input('price');
    	$publication->long_description = $request->input('long_description');
    	$publication->save();//insert

    	return redirect('/admin/products');
    }
    public function edit($id){
    	$publication = Publication::find($id);
    	return view('admin.products.edit')->with(compact('publication'));
    }

    public function update(Request $request,$id){

    	//registrar el nuevo producto en la bd
    	// dd($request->all());

    	$publication = Publication::find($id);
    	$publication->title = $request->input('title');
    	$publication->description = $request->input('description');
        $publication->rooms= $request->input('rooms');
        $publication->bathrooms= $request->input('bathrooms');
        $publication->parking= $request->input('parking');
        $publication->area= $request->input('area');
        $publication->stratum= $request->input('stratum');
        $publication->address= $request->input('address');
        $publication->rent_or_sale= $request->input('rent_or_sale');
    	$publication->price = $request->input('price');
    	$publication->long_description = $request->input('long_description');
    	$publication->save();//update

    	return redirect('/admin/products');
    }
    public function destroy($id){

    	$publication = Publication::find($id);
    	
    	$publication->delete();//delete

    	return back();
    }

}
