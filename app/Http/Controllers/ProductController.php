<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{






   public function index(){
   //  $products=Product::all();

    return view('Product.index');
  
     }


   public function create(){

    return view ('Product.create');

   }

   public function store(Request $request){

      $product = Product::create([
       
      'name'=>$request->name,
      'price'=>$request->price,
      'description'=>$request->description,
      'image'=>$request->has('image') ? $request->file('image')->store('public/image') : null



      ]);

     
   return redirect(route('home'))->whit('message', 'Hai inserito con successo il piatto!');


   }


  
}
