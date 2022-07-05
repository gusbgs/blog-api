<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }
    public function index()
    {
        return PostResource::collection(Post::latest()->get());
    }

    public function store(Request $request)
    {
        $post = Post::create([
            "title" => 'Angular JS'
        ]);

        return new PostResource($post);
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function update(Request $request, Post $post)
    {
       $this->validate($request, [
           'title' => 'required'
       ]);

       $post->update($request->only('title'));
    }

    public function destroy(Post $post)
    {
        //
    }
}
