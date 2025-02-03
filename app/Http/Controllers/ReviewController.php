<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Music;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    //public function index(Review $review,Music $music)//インポートしたPostをインスタンス化して$postとして使用。
    //{
        //dd($music->with('genre')->get());
        //return $music->with('genre')->get();//$postの中身を戻り値にする。
        //return view('review.index')->with([
        //'music'=>$music->get(),
        //'review_items1'=>$review->with('music')->get(),
        
       // ]);

    //}




    
   // レビューの表示
    public function show($musicId)
    {
       // Musicモデルに関連するレビューを取得
       $music = Music::with('reviews.user')->findOrFail($musicId);
       return view('reviews.show', compact('music'));
    }

    public function store(Request $request, $musicId)
    {
        $request->validate([
            'content' => 'required|string|max:500',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'music_id' => $musicId,
            'content' => $request->input('content'),
            'rating' => $request->input('rating'),
        ]);

        return redirect()->back()->with('success', 'レビューを投稿しました！');
    }


}