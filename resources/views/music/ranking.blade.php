<!-- resources/views/music/ranking.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>全体ランキング</h1>
    <h1>{{ $genre->name }} ジャンルのランキング</h1>
    <ul>
    @foreach($genre->musics as $music)
            <li>
                {{ $music->title }} - {{ $music->likes_count }} いいね
            </li>
            @section('content')

        @foreach($ranking as $music)
            <li>
                {{ $music->title }} - ジャンル: {{ $music->genre->name }} - {{ $music->likes_count }} いいね
            </li>
        @endforeach
    </ul>
@endsection

<!-- resources/views/music/genre_ranking.blade.php -->



