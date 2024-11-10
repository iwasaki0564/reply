<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'タイトル')</title>
  <script src="https://kit.fontawesome.com/2378359dfe.js" crossorigin="anonymous"></script>
  @vite('resources/css/app.css')
  @vite('resources/css/index.css')
</head>
<body>
  {{-- ここでheaderを呼び出す --}}
  @include('layouts.header')
  {{-- ここでcontentを呼び出す --}}
  @yield('content', 'コンテンツ')
</body>
</html>