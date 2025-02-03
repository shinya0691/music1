<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Music</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $music->title }}
        </h1>
        <div class="edit"><a href=“/music/{{ $music->id }}/edit">edit</a></div>
        <div class="content">
            <div class="content__music">
                    <p>{{ $music->name}}</p>    
                    <p>{{ $music->artist}}</p> 
                    <p>{{ $music->genre->name}}</p> 
                <h3>コメント</h3>
                    @if(session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
        @endif

        @auth
            <form action="{{ route('comments.store', $music) }}" method="POST">
                @csrf
                <textarea name="content" rows="3" required>{{ old('content') }}</textarea>
                <button  type="submit">コメントする</button>
            </form>
        @else
            <p>コメントするには <a href="{{ route('login') }}">ログイン</a> してください。</p>
        @endauth
        <ul>
            @foreach($music->comments as $comment)
                <li>
                    {{ $comment->user->name }}: {{ $comment->content }}
                    @if(Auth::id() === $comment->user_id)
                        <form action="{{ route('comments.destroy', $comment) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">削除</button>
                        </form>
                    @endif
                </li>
            @endforeach
        </ul>
                
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
