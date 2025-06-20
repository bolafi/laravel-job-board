<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent ORM -> Get all data
        $data = Tag::all();

        // Pass the data to the view
        return view('tag.index', ['tags' => $data, "pageTitle" => "Tags"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ["pageTitle" => "Tag - Create New Tag"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@TODO LATER
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Tag::findOrFail($id);

        return view('tag.show', ['tag' => $data, "pageTitle" => $data->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('tag.edit', ["pageTitle" => "Tag - Edit Tag"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@TODO LATER
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //@TODO LATER
    }
}
