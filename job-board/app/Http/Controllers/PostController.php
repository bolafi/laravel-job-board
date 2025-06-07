<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        // Eloquent ORM -> Get all data
        // $data = Post::all();
        $data = Post::cursorPaginate(5);

        // Pass the data to the view
        return view('post.index', ['posts' => $data, "pageTitle" => "Blog"]);

    }

    function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
    }

    function create()
    {
        // $post = Post::create([
        //     'title' => 'Apple iso is realeased',
        //     'body' => 'This is about new software been realeased by Apple',
        //     'author' => 'Hamad tech',
        //     'published' => true
        // ]);
        Post::factory(11)->create();

        return redirect('/blog');
    }

    function delete()
    {
        Post::destroy(1);

        return redirect('/blog');
    }
}
