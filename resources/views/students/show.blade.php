@extends('layouts.app')

@section('content')
  <div class="container_student">
    @forelse ($student as $k => $value)
      <li>{{ $k }}: {{ $value }}</li>
    @empty
      <h3>Questo studente non esite</h3>
    @endforelse
  </div>
@endsection
