<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * 投稿一覧
     *
     * @param Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Post $post)
    {
        $posts = $post->all();

        return view('posts.index', compact('posts'));
    }

    /**
     * 投稿フォーム
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCreateFrom()
    {
        return view('posts.create');
    }

    public function create(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $user = $request->user();

        $user->posts()->save($post);

        return redirect()->route('posts.index');
    }
}
