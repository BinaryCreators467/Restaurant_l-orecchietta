<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops=Shop::all();
        return view('Shop.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shop = Shop::create([
       
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,   
            'image'=>$request->has('image') ? $request->file('image')->store('public/image') : null,
            'user_id'=>Auth::user()->id

            
             ]);

            return redirect(route('createShop'))->with('message', 'Hai inserito con successo il tuo sponsor!');

      
           
    }

    /**
     * Display the specified resource.
     */
    public function show(Shop $shop)
    {
        return view('Shop.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shop $shop)
    {
        return view('Shop.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->update([
       
            'name'=>$request->name,
            'city'=>$request->city,
            'description'=>$request->description,
            'image'=>$request->has('image') ? $request->file('image')->store('public/image') : null
      
            ]);
   
         return redirect(route('indexShop'))->with('message', 'Hai modificato correttamente lo sponsor');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shop $shop)
    {

        $shop->delete();

        return redirect(route('indexShop'))->with('message', 'Hai cancellato correttamente lo sponsor');

    }
}
