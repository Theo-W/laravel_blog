<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $posts = Post::find($id);

        return view('posts.show', [
            'post' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.new');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        Post::create([
            'name' => $request->name,
            'content' => $request->content
        ]);

        Messages::create([
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index');
    }

    public function storeEdit($id, Request $request)
    {

        Post::findOrFail($id)->update([
            'name' => $request->name,
            'content' => $request->content
        ]);

        Post::findofFeil($id)->delete();

        return redirect()->route('posts.index');
    }

    public function delete($id, Request $request)
    {
        $post = Post::where(['id' => $id])->first();

        if ($post !== null ){
            $post->delete();
            return redirect()->route('posts.index');
        }else{
            return redirect()->route('posts.index');
        }
    }
}
