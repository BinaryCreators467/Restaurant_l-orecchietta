<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home() {
        return view('home');
    }

  public function userProfile(){
    return view('user_profile');
    }
}
