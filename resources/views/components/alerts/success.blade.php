@if (session('success'))
  <div class="mb-4 bg-green-800 text-white p-3">
    {{ session('success') }}
  </div>
@endif
