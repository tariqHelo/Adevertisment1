<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [

          'name',
          'email',
          'comment',
          'published'
        ];

    //  protected $appends = ['post_name'];

     public function post()
     {
         $this->belongsTo('App\Models\Post');
     }

}
