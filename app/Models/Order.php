<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{  
    protected $fillable = [
        'name',
        'product_name',
        'address',
        'image',
        'phone',
        'email',
        'description',
        'rating_id',
        'category_id',
        'quantity',
        'reviews',
        'price',
        'total_price',
        'order_status_id', 
        'user_id'       
    ];
    protected $appends = ["rating_title","category_name","order_status_name"];



    public function getCategoryNameAttribute()
    {
        //return  Category::find($this->brand_id)->title;
        return $this->category->title ?? '';
    }
    public function getRatingTitleAttribute(){
        // return $this->rating->title?? '';
        return Rating::find($this->rating)->title?? '';
    }
    public function getOrderStatusNameAttribute(){
        // return OrderStatus::find($this->order_status_id)->title;
        return $this->orderStatus->title;
    }

    public function user(){
        return $this->belongsTo("App\User");
    }
    public function orderStatus(){
        return $this->belongsTo("App\Models\OrderStatus");
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function rating(){
        return $this->belongsTo("App\Models\Rating", 'rating_id', 'id');
    }
}
