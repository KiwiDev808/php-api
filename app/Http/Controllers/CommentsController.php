<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $post_id = $request->input('post_id');

        $comment = new Comment;
        $comment->body = $request->input('body');
        $comment->user_id = Auth::id();
        $comment->post_id = $post_id;
        $comment->save();

        return back();
    }
}
