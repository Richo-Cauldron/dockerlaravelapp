<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function home()
    {
        $fromCache = false;

        if(Cache::store('redis')->has('posts')) {
            $fromCache = true;

            $posts = Cache::store('redis')->get('posts');
        } else {
            $posts = Post::all();

            Cache::store('redis')->put('posts', $posts, 3600);
        }

        return view('posts', [
            'posts' => $posts,
            'fromCache' => $fromCache
        ]);
    }
}
