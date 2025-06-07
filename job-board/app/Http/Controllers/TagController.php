<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Contracts\Mail\Attachable;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index()
    {
        // Eloquent ORM -> Get all data
        $data = Tag::all();

        // Pass the data to the view
        return view('tag.index', ['tags' => $data, "pageTitle" => "Tags"]);

    }

    function create()
    {
        $tag = Tag::create([
            'title' => 'CSS'
        ]);

        return redirect('/tags');
    }

    function testManyToMany()
    {
        // $post3 = Post::find(3);
        // $post4 = Post::find(4);

        // $post3->tags()->attach([1, 2]);
        // $post4->tags()->attach([1]);

        // return response()->json(([
        //     'post3' => $post3->tags,
        //     'post4' => $post4->tags
        // ]));
        $post1 = Post::first();

        $tag1 = Tag::first();
        $tag1->posts()->attach([$post1->id]);
        return response()->json(([
            'tag' => $tag1->title,
            'posts' => $tag1->posts
        ]));

    }


}
