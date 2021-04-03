<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.head')
</head>
<body class="bg-gray-800 text-white">
@include('includes.nav')
<main class="container mx-auto">
  @yield('content')
</main>
@include('includes.footer')
</body>
</html>
