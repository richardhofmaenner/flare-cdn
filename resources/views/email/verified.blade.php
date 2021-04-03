@extends('layouts.center-modal')

@section('title')
  Verify Email
@endsection

@section('content')
  <x-box-large>
    <h1 class="mb-8 text-center">Thank you for verifying your account</h1>
    <p class="text-sm text-gray-200 text-center">You can now proceed and <a class="text-red-500" href="{{ route('auth.login') }}">sign in</a>.</p>
  </x-box-large>
@endsection
