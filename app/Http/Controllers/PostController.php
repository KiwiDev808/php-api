<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostController extends \Illuminate\Routing\Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }
}
