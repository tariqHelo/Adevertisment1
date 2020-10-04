<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactMe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $contact=ContactMe::all();
        return view('dashboard.contactme.index',compact('contact'));
    }
    public function destroy($id){
        ContactMe::destroy($id);
        session()->flash("msg", "w: Deleted Successfully");
        return redirect(route("contactme"));
    }
}
