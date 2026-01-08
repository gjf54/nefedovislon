<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class PostController extends Controller
{
    function index() 
    {   
        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function show(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return abort(404);
        }

        return view('post', compact('post'));
    }
}
