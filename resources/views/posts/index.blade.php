<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>gameblog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>みんなが選ぶおすすめゲーム</h1>
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='title'>
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                </h2>
                <p class='body'>{{ $post->body }}</p>
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
            @endforeach
        </div>
    </body>
</html>
