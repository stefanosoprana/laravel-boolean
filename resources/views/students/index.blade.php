@extends('layouts.app')

@section('content')

  <div class="container_student">
    @foreach (config('students') as $student)
      <div class="back_student">
        <div class="card_student">
          <div class="student_left">
            <img src="{{ $student['img'] }}">
          </div>
          <div class="student_right">
            <h3>{{ $student['name'] }}  ({{ $student['age'] }} anni)</h3>
            <small>Ora è Web Developer in {{ $student['azienda'] }}</small>
          </div>
        </div>
      </div>
    @endforeach

  </div>

@endsection
