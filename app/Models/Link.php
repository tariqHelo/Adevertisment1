<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    protected $fillable = [
        'title',
        'route',
        'parent_id',
        'show_in_menu',
        'order_id',
        'icon'
    ];
}
