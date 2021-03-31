@extends('layouts.center-modal')

@section('title')
  Login
@endsection

@section('content')
  <x-box>
    <img id="logo-login" src="{{ asset('img/logo-white.png') }}" alt="">
    <form action="{{ route('login') }}" method="post">
      @csrf
      <x-forms.input placeholder="Email Address" name="email" type="email" value="{{ old('email')  }}" autofocus />
      <x-forms.input placeholder="Password" type="password" name="password" />
      <x-forms.submit>Sign in</x-forms.submit>
      <a href="{{ route('register') }}" class="text-right">Create Account</a>
    </form>
  </x-box>
@endsection
