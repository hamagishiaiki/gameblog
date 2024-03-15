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
       <form action='/posts/{{ $post->id }}'method='POST'>
           @csrf
           @method('PUT')
           <div class='title'>
               <h2>タイトル</h2>
               <input type='text' name=post[title] placeholder='タイトル' value={{ $post->title }}>
               <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <div class='body'>
               <h2>本文</h2>
               <textarea name='post[body]' placeholder='最高のゲームだった！'>{{ $post->body }}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
           </div>
           <div class="category">
                <h2>Category</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="evaluate">
                <h2>evaluate</h2>
                <select name="post[evaluate]">
                    <option value=0>0</option>
                    <option value=1>1</option>
                </select>
            </div>
            <div class="difficult">
                <h2>difficult</h2>
                <select name="post[difficult]">
                    <option value=0>0</option>
                </select>
            </div>
           <input type="hidden" name="post[user_id]" value="{{ Auth::id() }}">
           <input type='submit' value='更新'>
       </form>
        <div class='footer'>
            <a href='/posts/{{ $post->id }}'>戻る</a>
        </div>
    </body>
</html>