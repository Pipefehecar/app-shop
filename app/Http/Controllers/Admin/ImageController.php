<?php

namespace App\Http\Controllers\Admin;

use App\http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use App\productImage;
use File;
class ImageController extends Controller
{
	public function index($id)
	{
		$product = Product::find($id);
		$images = $product->images()->orderBy('featured','desc')->get();
		return view('admin.products.images.index')->with(compact('product','images'));
	}    

		public function store(Request $request, $id)
		{
			//guardamos la imagen del proyecto 
			$file = $request->file('photo');
			$path = public_path().'/images/products';
			$fileName = uniqid().$file->getClientOriginalName();
			$moved = $file->move($path, $fileName);


			//creamos un registro en la tabla product_images
			if ($moved) {
				$productImage = new productImage();
				$productImage->image = $fileName;
				//$productImage->featured = false;
				$productImage->product_id = $id;
				$productImage->save(); //INSERT
			}

			return back();
		}    

		public function destroy(Request $request, $id){
		//eliminar el archivo
			$productImage = productImage::find($request->input('image_id'));
			if(substr($productImage->image,0,4 )=="http"){
				$delete = true;
			}else{
				$fullPath = public_path().'/images/products/'.$productImage->image;
				$delete = File::delete($fullPath);
			}
			//eliminar el registro
			if($delete){
				$productImage->delete();
			}

			return back();
		}    

		public function select($id,$image){
			productImage::where('product_id',$id)->update([
				'featured'=>false
			]);

			$productImage =productImage::find($image);
			$productImage->featured = true;
			$productImage->save();

			return back();
		}
}

