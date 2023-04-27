<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{






   public function index(){



   $products=Product::all();

    return view('Product.index', compact('products'));
  
     }


   public function create(){

    return view ('Product.create');

   }

   public function store(ProductRequest $request){

      $product = Product::create([
       
      'name'=>$request->name,
      'price'=>$request->price,
      'description'=>$request->description,
      
      'image'=>$request->has('image') ? $request->file('image')->store('app/public/image') : null

      ]);

     
   return redirect(route('createProduct'))->with('message', 'Hai inserito con successo il piatto!');


   }


  
}
