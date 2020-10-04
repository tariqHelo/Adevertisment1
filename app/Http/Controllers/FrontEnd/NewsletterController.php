<?php


namespace App\Http\Controllers\FrontEnd;


use session;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function create(NewsletterRequest $request)
    {
       dd($request->all());
        if(Newsletter::where('email' , $request->get('email'))->get() == null){
            Newsletter::create([
                'email'=>$request->get('email')
            ]);
            return redirect()->back();
        }
        else{
            session()->flash('msg' , 'wgit : this mail has registed');
            return redirect()->back();
        }

    }
}
