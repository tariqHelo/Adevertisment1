<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use App\Models\Order;
use App\Models\Product;
use App\Models\ContactMe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\CreateRequest;

class HomeController extends Controller
{
    public function index(){

        return view('frontend.home.index');

    }
    public function allProduct(){
        return view('frontend.ads.ads-all');
    }
    public function adSingle($id){
        $orders = Order::find($id);
        return view('frontend.ads.ads-single')->with('orders',$orders);
    }
    public function adProduct($id){
        $products= Product::find($id);
        return view('frontend.ads.ads-product')->with('products',$products);
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
