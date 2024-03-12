<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>gameblog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
       <h1>投稿</h1>
       <form action='/posts' method='POST'>
           @csrf
           <div class='title'>
               <h2>タイトル</h2>
               <input type='text' name=post[title] placefolder='タイトル'>
           </div>
           <div class='body'>
               <h2>本文</h2>
               <textarea name='post[body]' placefolder='最高のゲームだった！'></textarea>
           </div>
           <input type='submit' value='store'>
       </form>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
    </body>
</html>