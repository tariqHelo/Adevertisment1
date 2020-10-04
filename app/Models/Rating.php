<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{   protected $table = "rating";
    protected $fillable = [
        "title"
    ];
    public function orders(){
        return $this->hasMany("App\Models\Order");
    }
    public function products(){
        return $this->hasMany("App\Models\Product");
    }
}
