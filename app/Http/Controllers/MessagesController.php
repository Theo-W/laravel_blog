<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    public function store($id, Request $request)
    {
        $post = Post::find($id);
        $user = Auth::id();

        $data = Messages::create([
            'message' => $request->message,
            'post_id' => $post->id,
            'user_id' => $user
        ]);

        return redirect()->route('posts.show', ['id' => $post->id]);
    }
}
