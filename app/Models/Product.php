<?php


namespace App\Models;


use App\Models\Rating;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "title",
        "image",
        "description",
        "reviews",
        "address",
        "category_id",
        'price',
        'phone' ,
        "published",
    ];
    protected $appends = ["rating_title", "category_name"];

    public function getCategoryNameAttribute()
    {
        //return  Category::find($this->brand_id)->title;
        return $this->category->title ?? '';
    }
    public function getRatingTitleAttribute(){
        // return $this->rating->title?? '';
        return Rating::find($this->rating)->title?? '';
    }
    public function rating(){
        return $this->belongsTo("App\Models\Rating", 'rating_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
