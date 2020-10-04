<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderCreateRequest;

class StoreOrderController extends Controller
{
  public function store(Request $request){
    //  dd($request->all());

   if(!$request->order_status_id){
    $request['order_status_id'] = 1;
}
//get logged user from access_token
     $request['user_id'] = $request->user()->id;
     $request['total_price'] = $request['quantity'] * $request['price'];
     $imageName = basename($request->imageFile->store("public"));
     $request['image'] = $imageName;
    //  Order::create($request->all());
     $order = Order::create($request->all());
     session()->flash('msg', "s: Order product create successfully");
     return redirect('home');
   
   }
}
