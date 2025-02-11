<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Music;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //public function index($musicId)
    //{
        //$music = Music::with('comments')->findOrFail($musicId);
       // return response()->json($music->comments);
    //}
    public function store(Request $request, Music $music)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);
        Comment::create([
            'user_id' => Auth::id(),
            'music_id' => $music->id,
            'content' => $request->content,
        ]);

        return back()->with('success', 'コメントを投稿しました！');
    }

    public function destroy(Comment $comment)
    {
        if (Auth::id() !== $comment->user_id) {
            return back()->with('error', '削除権限がありません。');
        }

        $comment->delete();
        return back()->with('success', 'コメントを削除しました！');
    }
}
