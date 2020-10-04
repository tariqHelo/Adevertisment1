<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserLoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = "home";

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('frontend.home.login');
    }

    public function logout() {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect()->route("user.show_login");
    }

    protected function guard()
    {
        return \Auth::guard("user");
    }
}
