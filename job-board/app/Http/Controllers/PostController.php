<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent ORM -> Get all data
        // $data = Post::all();
        $data = Post::cursorPaginate(5);

        // Pass the data to the view
        return view('post.index', ['posts' => $data, "pageTitle" => "Blog"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', ["pageTitle" => "Create New Post"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@TODO: This will be completed in the Form section 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('post.edit', ["pageTitle" => "Edit Post"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@TODO: This will be completed in the Form section 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //@TODO: This will be completed in the Form section 
    }
}
