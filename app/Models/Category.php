<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{  protected $table = 'categories';
    protected $fillable = [
        'title',
        'rating',
        'icon',
        'published'
    ];
    public function products(){
        return $this->hasMany("App\Models\Product");
    }
    public function orders(){
        return $this->hasMany("App\Models\Order");
    }
}
