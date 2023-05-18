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
      'image'=>$request->has('image') ? $request->file('image')->store('public/image') : null

      ]);

      return redirect(route('createProduct'))->with('message', 'Hai inserito con successo il piatto!');

   }

   public function show(Product $product){

      return view('Product.show', compact('product'));

   }

   public function edit(Product $product){

      return view('Product.edit', compact('product'));

   }

   public function update(Request $request, Product $product){

      $product->update([
       
         'name'=>$request->name,
         'price'=>$request->price,
         'description'=>$request->description,
         'image'=>$request->has('image') ? $request->file('image')->store('public/image') : null
   
         ]);

      return redirect(route('indexProduct'))->with('message', 'Hai modificato correttamente il piatto');

   }

   public function destroy(Product $product){

      $product->delete();

      return redirect(route('indexProduct'))->with('message', 'Hai cancellato correttamente il piatto');

   }


  
}
