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
        $post = Post::all(); //$post = Post::orderBy('created_at', 'desc')->get(); 
        return view('partials._tweet', ['posts' => $post]);
    }

    public function home()
    {
        $post = Post::all(); //$post = Post::orderBy('created_at', 'desc')->get(); 
        return view('home', ['posts' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partials._tweet-box');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $post = new Post;
        $post->publicacion = $request->publicacion;
        $post->lenguaje = $request->lenguaje;

        $post->save();

        return redirect()->route('principal');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $post = Post::findOrFail($id); //find($id); //where('id', $id)->first(); 
    //     return view ('partials._tweet' ,['post' => $post]);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $id)
    {
        $post = Post::findOrFail($id);  //find($id); //where('id', $id)->first();
        return view ('partials._tweet' ,['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $post->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        //
    }
}
