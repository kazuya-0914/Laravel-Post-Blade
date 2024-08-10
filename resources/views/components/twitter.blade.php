<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
</head>
<body>
  <div>
    <header>
      <nav>
        <a href="{{ route('posts.index') }}">投稿アプリ</a>
      </nav>
      <ul>
        <li><a href="{{ route('logout') }}" id="logout">ログアウト</a></li>
        <form action="{{ route('logout') }}" method="POST" id="logout-form">
          @csrf
        </form>
      </ul>
    </header>

    <main>
      {{ $slot }}
    </main>

    <footer>
      <p>&copy; 投稿アプリ All rights reserved.</p>
    </footer>
  </div>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>