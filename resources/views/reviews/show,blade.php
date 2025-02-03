@extends('layouts.app')

@section('content')
<h1>{{ $music->title }}</h1>

<h2>レビュー一覧</h2>
@foreach ($music->reviews as $review)
    <div>
        <strong>{{ $review->user->name }}</strong>
        <p>評価: {{ $review->rating }} / 5</p>
        <p>{{ $review->content }}</p>
    </div>
@endforeach

<h2>レビューを投稿する</h2>
<form action="/music/{{ $music->id }}/reviews" method="POST">
    @csrf
    <div>
        <label for="content">レビュー内容:</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <div>
        <label for="rating">評価:</label>
        <select name="rating" id="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <button type="submit">投稿</button>
</form>
@endsection