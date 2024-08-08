<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        Post::create($request->all());

        return redirect('/posts');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post = Post::find($id);

        $post->update($request->all());

        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts');
    }
}
