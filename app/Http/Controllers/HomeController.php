<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  public function home() {
        return view('home');
    }

  public function userProfile(){
    return view('user_profile');
    }


    public function destroy(){


      foreach(Auth::user()->shops as $shop){


        $shop->user()->dissociate();
        $shop->save();


      }





      Auth::user()->delete();

      return redirect(route('home'))->with('message', 'Utente cancellato correttamente');


      

    }



}
