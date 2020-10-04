<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('frontend.home.login');
    }

    public function register(){
        return view('frontend.home.register');
    }
}
