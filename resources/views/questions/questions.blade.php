@extends('layout.main')
@section('content')

  <section class="card-container">
    @foreach($questions as $question)
    @php
    $imagePath = is_array($question->images) ? $question->images[0] : $question->images;
    @endphp
    <div class="card">
      <a href="{{ asset('storage/'.$imagePath) }}" target="_blank">
        @if (pathinfo($imagePath, PATHINFO_EXTENSION) == 'pdf')
        <embed src="{{ asset('storage/'.$imagePath) }}" type="application/pdf" height="800px" width="100%" />
        @else
        <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $question->name }}">
        @endif
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $question->name }}</h5>
      </div>
    </div>
    @endforeach
  </section>

@endsection
