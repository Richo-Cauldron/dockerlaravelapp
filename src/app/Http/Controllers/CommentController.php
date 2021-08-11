<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Post $post)
    {
        return $post->comments;;
    }

    public function show(Post $post, Comment $comment)
    {
        return $comment;
    }


}
