@extends('layouts.default')

@section('title')
  Dashboard
@endsection

@section('content')
  <section class="mt-20 mb-20">
    <h1 class="text-center">Howdy, {{ auth()->user()->firstname }}!</h1>
  </section>
  <section class="mb-20">

  </section>
@endsection
