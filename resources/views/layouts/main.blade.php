<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @production
    <meta name="robots" content="index,follow">
  @endproduction

  <title>@yield('title') | flare.li</title>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
