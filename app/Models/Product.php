<?php


namespace App\Models;


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
    protected $appends = ["brand_name", "category_name"];

    public function getCategoryNameAttribute()
    {
        //return  Category::find($this->brand_id)->title;
        return $this->category->title ?? '';
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
