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
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='title'>{{ $post->title }}</h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
