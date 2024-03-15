<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>gameblog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h2>本文</h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
        </div>
        <div class="category">
                <h2>Category</h2>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            </div>
            <div class="evaluate">
                <h2>evaluate</h2>
                <p class='evaluate'>{{ $post->evaluate }}</p>
            </div>
            <div class="difficult">
                <h2>difficult</h2>
                <p class='difficult'>{{ $post->difficult }}</p>
            </div>
            <div class="image w-0.5">
                <img src="{{ $post->image_path }}" alt="画像が読み込めません。"/>
            </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">編集</a>
            </div>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>