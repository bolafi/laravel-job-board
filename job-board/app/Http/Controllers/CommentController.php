<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index()
    {
        // Eloquent ORM -> Get all data
        $data = Comment::all();

        // Pass the data to the view
        return view('comment.index', ['comments' => $data, "pageTitle" => "Blog"]);

    }

    function show($id)
    {
        $comment = Comment::findOrFail($id);

        return view('comment.show', ['comment' => $comment, "pageTitle" => $comment->title]);
    }

    function create()
    {
        // Comment::create([
        //     'author' => 'Bibo',
        //     'content' => 'finally good news',
        //     'post_id' => '01973584-1476-72e8-94a6-8d9c6319795f'
        // ]);
        Comment::factory(2)->create();

        return redirect('/comments');
    }
}
