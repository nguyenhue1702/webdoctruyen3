<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function insert_comment(CommentRequest $request){
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->user_id = $request->user_id;
        $comment->session_id = $request->session_id;
        $comment->save();
        return redirect()->back()->with('ok','Comment Success');
    }
}
