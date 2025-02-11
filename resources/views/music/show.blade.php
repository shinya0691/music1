<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Music</title>
        <!-- Fonts & CSS -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
                text-align: center;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                background: white;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #333;
                font-size: 24px;
            }
            .edit a {
                display: inline-block;
                margin-top: 10px;
                padding: 8px 12px;
                background: #007BFF;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }
            .edit a:hover {
                background: #0056b3;
            }
            .content {
                text-align: left;
                margin-top: 20px;
            }
            .content p {
                font-size: 18px;
                color: #555;
            }
            h3 {
                margin-top: 30px;
                border-bottom: 2px solid #007BFF;
                display: inline-block;
                padding-bottom: 5px;
            }
            .comment-section {
                margin-top: 20px;
                padding: 15px;
                background: #f9f9f9;
                border-radius: 8px;
                text-align: left;
            }
            textarea {
                width: 100%;
                padding: 10px;
                border-radius: 5px;
                border: 1px solid #ccc;
                resize: none;
            }
            .btn {
                margin-top: 10px;
                background: #28a745;
                color: white;
                border: none;
                padding: 8px 15px;
                border-radius: 5px;
                cursor: pointer;
            }
            .btn:hover {
                background: #218838;
            }
            .comment-list {
                margin-top: 20px;
                padding: 0;
                list-style: none;
            }
            .comment-item {
                background: white;
                padding: 10px;
                margin-bottom: 10px;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                display: flex;
                justify-content: space-between;
            }
            .delete-btn {
                background: red;
                color: white;
                border: none;
                padding: 5px 10px;
                border-radius: 5px;
                cursor: pointer;
            }
            .delete-btn:hover {
                background: darkred;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>{{ $music->title }}</h1>
            <a href="{{ route('index') }}" class="top-btn">戻る</a>

            <style>
                .top-btn {
                    display: inline-block;
                    margin-top: 15px;
                    padding: 10px 15px;
                    background: #008000;
                    color: white;
                    text-decoration: none;
                    border-radius: 5px;
                    font-size: 16px;
                    font-weight: bold;
                }
                .top-btn:hover {
                    background: #007bff;
                 }
            </style>
   
            <div class="content">
                <div class="content__music">
                    <p><strong>曲名:</strong> {{ $music->name }}</p>    
                    <p><strong>アーティスト:</strong> {{ $music->artist }}</p> 
                    <p><strong>ジャンル:</strong> {{ $music->genre->name }}</p> 
                </div>
                
                <h3>コメント</h3>

                @if(session('success'))
                    <p style="color: green;">{{ session('success') }}</p>
                @endif

                <div class="comment-section">
                    @auth
                        <form action="{{ route('comments.store', $music->id) }}" method="POST">
                            @csrf
                            <textarea name="content" rows="3" required placeholder="コメントを入力">{{ old('content') }}</textarea>
                            <button type="submit" class="btn">送信</button>
                        </form>
                    @else
                        <p>コメントするには <a href="{{ route('login') }}">ログイン</a> してください。</p>
                    @endauth
                </div>

                <ul class="comment-list">
                    @foreach($music->comments as $comment)
                        <li class="comment-item">
                            <div>
                                <strong>{{ $comment->user->name }}</strong> 
                                <span class="text-muted">({{ $comment->created_at->format('Y-m-d H:i') }})</span>
                                <p>{{ $comment->content }}</p>
                            </div>
                            @if(Auth::id() === $comment->user_id)
                                <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn">削除</button>
                                </form>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>