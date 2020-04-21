<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Weibo App') - 练手项目</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  @include('layouts._header')
  <div class="container">
    @include('shared._message')
    @yield('content')
    @include('layouts._footer')
  </div>

</body>
</html>
