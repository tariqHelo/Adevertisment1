<?php


namespace App\Http\Controllers\FrontEnd;


use session;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;
use Illuminate\Http\Request;


class NewsletterController extends Controller
{


    public function create(NewsletterRequest $request)
    {

         //Newsletter::create($request->all());
        if(Newsletter::where('email' , $request->get('email'))->get() !== $request->get('email')){
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
