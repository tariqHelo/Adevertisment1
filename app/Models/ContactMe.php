<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMe extends Model
{
    protected $table='contact_me';
    protected $fillable=[
    'fname',
    'lname',
    'email',
    'subject',
    'message',
    ];
}