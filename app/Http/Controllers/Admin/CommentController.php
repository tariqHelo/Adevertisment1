<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommentsRequest;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::orderBy('id');
        $published = \request()->get('published');

        if (isset($published)){

            $comments->where('published' , $published);
        }
        if (isset($user_id)){

            $comments->where('user_id' , $user_id);
        }
        if (isset($description)){

            $comments->where('description' , $description);
        }
        $comments =$comments->paginate(10)->appends(['published' => $published ]);

        return view('dashboard.comments.comments')->with('comments' , $comments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentsRequest $request)
    {


        $request['published'] = $request->get('published')?1:0 ;
        Comment::create($request->all());
        session()->flash('msg' , 's: comment created successfully');
        return redirect(route('comments.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $comments = Comment::find($comment->id);
//        dd($comments);
        return view('admin.comments.show')->with('comments' , $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments = Comment::find($id);
        if(!$comments){
            Session()->flash('msg','comment not found');
            return redirect(route('comments.index'));
        }
        Comment::destroy($id);
        session()->flash("msg", "s:  comments Deleted Successfully");
        return redirect(route("comments.index"));
    }
}
