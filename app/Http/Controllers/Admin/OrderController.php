<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;

use App\Models\Product;
use App\User;
use App\Models\OrderStatus;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = \request()->get('user_id') ;
        $price = \request()->get('price') ;
        $order_status_id = \request()->get('order_status_id');

        $orders=Order::orderBy('id','desc');
        if ($user_id!="")
        {
            $orders->where('user_id' , $user_id);
        }
        if ($price){

            $orders->where('price' , 'like' , "%{$price}%");
        }
            if ($order_status_id !=""){  
            //To Make Foreach in View 
            $statuses=OrderStatus::orderBy('title')->get();
            $users=User::orderBy('name')->get();
            $orders = $orders->paginate(5)->appends([
                "status"=>$status,
                "users"=>$users
                ]);

                $orders->where('order_status_id' , $order_status_id);
            }
        $status=OrderStatus::all();
        $users=User::all();
        $orders=$orders->paginate(5)->appends([
            "user_id"=>$user_id,
            "price"=>$price,
            "order_status_id"=>$order_status_id
        ]);

        return view('dashboard.orders.index',compact('orders','status','users'));
    }


    public function done($id){
        $order_done=Order::find($id);
        $order_done->update(['order_status_id'=>2]);
        session()->flash('msg','s: Order has been Done');
        return redirect()->back();
    }

    public function cancel($id){
        $order_cancel=Order::find($id);
        $order_cancel->update(['order_status_id'=> 3]);
        session()->flash('msg','e: Order has been Cancel');
        return redirect()->back();
    }

    public function pending($id){
        $order_pending=Order::find($id);
        $order_pending->update(['order_status_id'=>1]);
        session()->flash('msg','s: Order has been pending');
        return redirect()->back();
    }

    public function show($id)
    {
        
        $orders=Order::all();
        $order = Order::find($id);
//        dd($comments);
        return view('dashboard.orders.show')->with('order' , $order)->with('orders',$orders);
    }
    public function destroy($id)
    {

        $order = Order::find($id);
        if(!$order){
            Session()->flash('msg','Order not found');
            return redirect()->back();
        }
        Order::destroy($id);
        session()->flash("msg", " Order Deleted Successfully");
        return redirect()->back();
    }
}
