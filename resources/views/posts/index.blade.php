<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>投稿一覧</title>
</head>
<body>
  <div>
    <header>
      <nav>
        <a href="{{ route('posts.index') }}">投稿アプリ<</a>
      </nav>
      <ul>
        <li><a href="{{ route('logout') }}">ログアウト</a></li>
        <form action="{{ route('logout') }}" method="POST" id="logout-form">
          @csrf
        </form>
      </ul>
    </header>

    <main>
      <h1>投稿一覧</h1>
      @if ($posts->isNotEmpty())
      @foreach ($posts as $post)
        <article>
          <h2>{{ $post->title }}</h2>
          <p>{{ $post->content }}</p>
          <a href="{{ route('posts.show', $post) }}">詳細</a>
        </article>
      @endforeach
          
      @else
        <p>投稿はありません</p>
      @endif
    </main>

    <footer>
      <p>&copy; 投稿アプリ All rights reserved.</p>
    </footer>
  </div>
</body>
</html>