<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
   public function index(){

   $products=Product::all();

    return view('Product.index', compact('products'));
  
     }

   public function create(){

      $shops=Shop::all();

    return view ('Product.create', compact('shops'));

   }

   public function store(Request $request){

      $product = Product::create([
       
      'name'=>$request->name,
      'price'=>$request->price,
      'description'=>$request->description,   
      'image'=>$request->has('image') ? $request->file('image')->store('public/image') : null,
      'user_id'=>Auth::user()->id
      ]);

      $product->shops()->attach($request->shops);

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

         $product->shops()->attach($request->shops);

      return redirect(route('indexProduct'))->with('message', 'Hai modificato correttamente il piatto');

   }

   public function destroy(Product $product){

      foreach($product->shops as $shop){
         $shop->products()->detach($product->id);
      }

      $product->delete();

      return redirect(route('indexProduct'))->with('message', 'Hai cancellato correttamente il piatto');

   }


  
}
