<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent ORM -> Get all data
        $data = Comment::all();

        // Pass the data to the view
        return view('comment.index', ['comments' => $data, "pageTitle" => "Comment Page"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Comment::factory(10)->create();
        return view('comment.create', ["pageTitle" => "Comment - Create New Comment"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@TODO  LATER
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);

        return view('comment.show', ['comment' => $comment, "pageTitle" => $comment->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        return view('comment.edit', ["pageTitle" => "Comment - Edit Comment"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@TODO  LATER

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //@TODO  LATER
    }
}
