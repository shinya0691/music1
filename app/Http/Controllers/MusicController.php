<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Genre;
use App\Http\Requests\MusicRequest; 


class MusicController extends Controller
{
    public function index(Music $music,Genre $genre)//インポートしたPostをインスタンス化して$postとして使用。
    {
        //dd($music->with('genre')->get());
        //return $music->with('genre')->get();//$postの中身を戻り値にする。
        return view('music.index')->with([
            'genres'=>$genre->get(),
            'music_items'=>$music->with('genre')->get(),
            
        ]);

    }


   public function create()
    {
        return view('music.create');
    }

    public function store(Request $request, MusicRequest $music)
    {
        $input = $request['music'];
        $music->fill($input)->save();
        return redirect('/music/' . $music->id);
    }

    public function show(Music $music)
    {
        return view('music.show')->with(['music' => $music]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }

    public function delete(Music $music)
   {
        $music->delete();
        return redirect('/');
    }

   // public function genreRanking($genreId)
    //{
        // 指定されたジャンルの曲を取得し、いいね数でソート
      //  $genre = Genre::with(['musics' => function($query) {
          //      $query->withCount('likes')
            //          ->orderBy('likes_count', 'desc');
          //  }])
          //  ->findOrFail($genreId);

      //  return view('music.genre_ranking', compact('genre'));
   // }

       //public function ranking()
    //{
        // いいね数をカウントし、降順でソート
        //$ranking = Music::with('genre')
            //->withCount('likes') // likes_countとしていいね数を取得
            //->orderBy('likes_count', 'desc') // いいね数でソート
           // ->take(10) // 上位10曲を取得
          //  ->get();

      //  return view('music.ranking', compact('ranking'));
    //}

}
