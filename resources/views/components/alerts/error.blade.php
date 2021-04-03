@if ($errors->any())
  <div class="mb-4 bg-red-800 text-white p-3">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
