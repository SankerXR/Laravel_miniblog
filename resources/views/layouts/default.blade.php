<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sanker-@yield('title', '')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
  @include('layouts._header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @include('shared._message')
        @yield('content')
        @include('layouts._footer')
      </div>

    </div>

  </body>
</html>
