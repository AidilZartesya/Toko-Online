<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    
	public function showAll(){
		public function showAll() {
		$dataProductDariModel = Product::all();
		return view(‘product.display’, [“products” =>
		$dataProductDariModel]);
		}
	}

	public function saveNew(Request $request){
 		/** Nah sekarang kita bisa menggunakan $id
 		* untuk misalnya query ke DB product where id == $id
		 */
	}

	public function create(Request $request){
 		$product_name = $request->get("product_name");
 		$product_stock = $request->get("stock");
 		$product_desc = $request->get("description");
 		$product_price = $request->get("price");
	}


}

