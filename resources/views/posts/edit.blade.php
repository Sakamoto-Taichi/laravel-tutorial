<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body> class="antialiased">
    <h1>Blog Name</h1>
      <form action="/posts/{{ $post->id}}" method="POST">
          @csrf
          @method('PUT')
          <divg class="title">
              <h2>Title</h2>
              <input type="text" name="post[title]" placeholder="タイトル" value={{ $post->title }}>
          </div>
          <div class="body">
              <h2>Body</h2>
              <textarea name="post[body]" placeholder="今日もお疲れ様でした。">{{ $post->body }}</textarea>
          </div>
          <input type="submit" value="update">
      </form>
        <div class="footer">
            <a href="/posts/{{ $post->id">戻る</a>
        </div>
    </body>
</html>