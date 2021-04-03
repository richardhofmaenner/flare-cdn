<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.head')
</head>
<body class="bg-gray-800">
<main class="min-h-screen flex flex-col justify-center items-center text-white">
  @yield('content')
</main>
@include('includes.footer')
</body>
</html>
