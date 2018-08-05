<?php

namespace App\Http\Controllers\Admin;

use App\http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index(){
    	$products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));//listado de productos
    }

    public function create(){
    	return view('admin.products.create');//formulario de registro de producto
    }

    public function store(Request $request){

    	//registrar el nuevo producto en la bd
    	// dd($request->all());

    	$product = new Product();
    	$product->nombre = $request->input('nombre');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save();//insert

    	return redirect('/admin/products');
    }
    public function edit($id){
    	$product = Product::find($id);
    	return view('admin.products.edit')->with(compact('product'));
    }

    public function update(Request $request,$id){

    	//registrar el nuevo producto en la bd
    	// dd($request->all());

    	$product = Product::find($id);
    	$product->nombre = $request->input('nombre');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->long_description = $request->input('long_description');
    	$product->save();//update

    	return redirect('/admin/products');
    }
    public function destroy($id){

    	$product = Product::find($id);
    	
    	$product->delete();//delete

    	return back();
    }

}
