<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::wherePublished(true)->latest()->get());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}