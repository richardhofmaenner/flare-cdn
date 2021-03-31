@extends('layouts.center-modal')

@section('title')
  Register
@endsection

@section('content')
  <x-box-large>
    <img id="logo-login" src="{{ asset('img/logo-white.png') }}" alt="">
    @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
    <form action="{{ route('register') }}" method="post">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-4 mt-5">
        <x-forms.input placeholder="First Name *" name="firstname" value="{{ old('name') }}" autofocus required />
        <x-forms.input placeholder="Last Name *" name="lastname" value="{{ old('lastname') }}" required />
        <x-forms.input placeholder="Email *" name="email" type="email" value="{{ old('email')  }}" required />
        <x-forms.input placeholder="Email confirmation *" name="email_confirmation" type="email" value="{{ old('email_confirmation') }}" required />
        <x-forms.input placeholder="Password *" type="password" name="password" required />
        <x-forms.input placeholder="Password confirmation *" type="password" name="password_confirmation" required />
        <div>
          <x-forms.submit>Register</x-forms.submit>
        </div>
        <a href="{{ route('login') }}" class="block">Already an Account?</a>
      </div>
    </form>
  </x-box-large>
@endsection
