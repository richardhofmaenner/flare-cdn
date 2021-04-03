@extends('layouts.default')

@section('title')
  Containers
@endsection

@section('content')
  <section class="mt-20 mb-10 text-center">
    <h1>My containers</h1>
  </section>
  <section class="mb-10">
    <table class="table table-auto border-collapse w-full">
      <thead class="">
        <tr class="border-b border-white">
          <th class="px-0.5 py-3">#</th>
          <th class="text-left">Name</th>
          <th class="text-left">Actions</th>
        </tr>
      </thead>
      <tbody>
      @if (count($containers) > 0)
        @foreach($containers as $container)
          <tr class="border-b border-white">
            <td class="text-center px-0.5 py-3">{{ $container->id }}</td>
            <td class="px-0.5">{{ $container->name }}</td>
            <td><x-globals.button type="error" href="">Delete</x-globals.button></td>
          </tr>
        @endforeach
      @else
        <tr>
          <td colspan="3">No Containers</td>
        </tr>
      @endif
      </tbody>
    </table>
  </section>
@endsection
