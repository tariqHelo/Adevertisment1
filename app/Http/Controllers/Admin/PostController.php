<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Post\CreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\EditRequest;
use App\Http\Requests\Post\CreateProductRequest;

class PostController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id');
        $q=request()->get("q")??"";
        $published=request()->get("published");


        if($q){
            $posts->where('title','like',"%{$q}%");
        }
        if (isset($published)){

            $posts->where('published' , $published);
        }

        $posts = $posts->paginate(5)->appends(["q"=>$q,"published"=>$published]);

        return view('dashboard.post.index')->withPosts($posts);
    }

    public function create()
    {
        return view('dashboard.post.create');
    }

    public function store(CreateRequest $request){
        $request['user_id'] = auth()->id();
//        dd($request->all());
        $request['published'] = $request['published'] ? 1 : 0;
        $imageName = basename($request->imageFile->store('public'));
        $request['image'] = $imageName;
        Post::create($request->all());
        session()->flash('msg' , 's: comment created successfully');
        return redirect(route('post.index'));
    }

    public function show(Post $post)
    {
        $posts = Comment::find($post->id);
        return view('dashboard.post.show')->with('posts' , $posts);
    }
    public function edit($id)
    {

        $post = Post::find($id);
        if (!$post){
            session()->flash('msg' , 'w: post not found');
            return redirect(route('posts.index'));
        }
        return view('dashboard.post.edit')->with('post' , $post);
    }
    public function update(EditRequest $request, $id)
    {
        //
        if(!$request->published ){
            $request['published']=0;
        }

        if($request->imageFile){
            $imageName = basename($request->imageFile->store("public"));
            $request['image'] = $imageName;
        }

        Post::find($id)->update($request->all());
        session()->flash("msg", "Post Updated Successfully");
        return redirect(route("post.index"));
    }

    public function destroy($id)
    {
        $posts = Post::find($id);
        if(!$posts){
            Session()->flash('msg','post not found');
            return redirect(route('post.index'));
        }
        Post::destroy($id);
        session()->flash("msg", "s:  posts Deleted Successfully");
        return redirect(route("post.index"));
    }
}

