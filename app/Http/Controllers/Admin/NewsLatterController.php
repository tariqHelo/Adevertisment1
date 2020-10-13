<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactMe;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsLatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $news=Newsletter::all();
        return view('dashboard.newsletter.index',compact('news'));
    }
    public function destroy($id){
        Newsletter::destroy($id);
        session()->flash("msg", "w: Deleted Successfully");
        return redirect()->back();
    }
}
