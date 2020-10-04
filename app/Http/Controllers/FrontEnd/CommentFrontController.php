<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentsRequest;
use Illuminate\Support\Facades\Session;

class CommentFrontController extends Controller
{
    public function storeComment(CommentsRequest $request)
    {
        Comment::create($request->all());
        Session::flash('msg','s:Added Successfuly...');
        return redirect()->back();
    }
}
