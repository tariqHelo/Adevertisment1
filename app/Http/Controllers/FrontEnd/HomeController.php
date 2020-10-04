<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use App\Models\ContactMe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCreateRequest;
use App\Http\Requests\Contact\CreateRequest;

class HomeController extends Controller
{
    public function index(){
        
        return view('frontend.home.index');

    }
    public function adSingle(){

        return view('frontend.ads.ads-single');

    }
    public function about(){
        return view("frontend.home.about");
    }
    public function contact(){

        return view("frontend.home.contact");
    }  
    public function blog(){
        return view("frontend.home.blog");
    } 
    
    public function postContact(CreateRequest $request){
        ContactMe::create($request->all());
        session()->flash("msg","s: Thank you for your contact");
        return redirect(route("contact"));
    }

    // public function contactme(){
    //  return view("frontend.home.contact");
    // }

    
}
