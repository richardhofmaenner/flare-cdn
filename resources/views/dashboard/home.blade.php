@extends('layouts.default')

@section('title')
  Dashboard
@endsection

@section('content')
  <section class="mb-20">
    <h1 class="text-center">Howdy, {{ auth()->user()->firstname }}!</h1>
  </section>
  <section class="mb-20">
    @if (count($userContainers) > 0)
      @foreach($userContainers as $container)
        <div class="grid gap-4 grid-cols-3">
          <x-dashboard.container :container="$container" />
        </div>
      @endforeach
    @else
      <p class="font-bold">You have currently 0 containers.</p>
    @endif
  </section>
@endsection
