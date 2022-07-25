<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCommentResource;
use App\Models\PostComment;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function showComment($id)
    {
        $comments = PostComment::all()->where('post_id', $id);

        return PostCommentResource::collection($comments);
    }
    public function show(PostComment $postComment)
    {

    }

    public function edit(PostComment $postComment)
    {
    }

    public function update(Request $request, PostComment $postComment)
    {
    }

    public function destroy(PostComment $postComment)
    {
    }
}
