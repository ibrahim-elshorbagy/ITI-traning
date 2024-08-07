<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        ['id' => 1, 'title' => 'First Post', 'content' => 'This is the first post'],
        ['id' => 2, 'title' => 'Second Post', 'content' => 'This is the second post'],
    ];

    public function index()
    {
        $posts = $this->posts;
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        echo "Post stored successfully!";
    }

    public function show($postId)
    {
        $post = null;
        foreach ($this->posts as $p) {
            if ($p['id'] == $postId) {
                $post = $p;
                break;
            }
        }

        if ($post === null) {
            return redirect('/posts')->with('error', 'Post not found');
        }

        return view('posts.show', ['post' => $post, 'postId' => $postId]);
    }

    public function edit($postId)
    {
        $post = null;
        foreach ($this->posts as $p) {
            if ($p['id'] == $postId) {
                $post = $p;
                break;
            }
        }

        if ($post === null) {
            return redirect('/posts')->with('error', 'Post not found');
        }

        return view('posts.edit', ['post' => $post, 'postId' => $postId]);
    }

    public function update(){
        echo "Post updated successfully!";
    }

    public function delete()
    {

        echo "Post deleted successfully!";

    }
}
