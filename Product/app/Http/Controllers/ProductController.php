<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class ProductController extends Controller
{
   public function show(){

       $products =Product::all();
      return view('product_list',compact('products'));

   }

   public function productsearch(Request $request){

    if($request->isMethod('post')){
        $name = $request->get('name');
        $products = Product::where('product_name', 'LIKE', '%' . $name . '%')->get();
    }
     return view('product_list', compact('products'));

   }
}
