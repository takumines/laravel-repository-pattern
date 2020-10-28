<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function store(Request $request, User $user, Post $post)
    {
        // withoutSyncingToSearchメソッドを実装することでインデックスとデータの同期が行われない
//        $post->withoutSyncingToSearch(function () use ($user, $request, $post) {
            $currentUser = $user->find($request->user_id);
            $post->title = $request->title;
            $post->body = $request->body;
            $post->user_id = $currentUser->id;

            $post->save();
            $post->searchable();
//        });


        return response()->json([
            'post' => $post
                                ]);
    }

    public function update(Request $request)
    {

    }

    public function destroy(Post $post)
    {
        $post->unsearchable();
    }
}
