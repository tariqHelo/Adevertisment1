<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostAdController extends Controller
{
  public function PostAd(){
    
      return view('frontend._postAd.post');
  }
}
