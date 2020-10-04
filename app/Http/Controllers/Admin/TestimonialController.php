<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Testimonial\EditRequest;
use App\Http\Requests\Testimonial\CreateRequest;




class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id');

        $q=request()->get("q")??"";
        $published=request()->get("published");

        if($q){
            $testimonials->where('title','like',"%{$q}%");
        }
        if($published!=null){
            $testimonials->where('published',$published);
        }

        $testimonials = $testimonials->paginate(5)->appends([
            "q"=>$q,
            "published"=>$published,
            ]);

            return view('dashboard.testimonials.index')->withTestimonials($testimonials);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    ///dd(10);
        return view("dashboard.testimonials.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {  
        $request['published'] = $request['published'] ? 1 : 0;
        $imageName = basename($request->imageFile->store('public'));
        $request['image'] = $imageName;
        Testimonial::create($request->all());
        Session::flash("msg","Testimonial created successfully");
        return redirect(route('x1'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  redirect(route('testimonials.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $testimonials = Testimonial::find($id);
        if($testimonials==null){
           session()->flash("msg", "The Testimonial was not found");
           return redirect(route("about.index"));
        }
        return view("dashboard.testimonials.edit")->withTestimonials($testimonials);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditRequest $request, $id)
    {
        if(!$request->published){
            $request['published']=0;
        }
        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['image'] = $imageName;
        }
        Testimonial::find($id)->update($request->all());
        session()->flash("msg", "The Testimonial was updated");
        return redirect(route("x1"));
    }
       
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials = Testimonial::find($id);
        if(!$testimonials){
            Session()->flash('msg','w: this item not found');
            return redirect(route('testimonials.index'));
        }
        Testimonial::destroy($id);
        session()->flash("msg", "s: Testimonial Deleted Successfully");
        return redirect(route("x1"));
    }
}
