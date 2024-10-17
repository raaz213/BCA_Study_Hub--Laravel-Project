@extends('layout.main')
@section('content')

  <section class="card-container">
    @foreach($syllabus as $syllabi)
    @php
    $imagePath = is_array($syllabi->images) ? $syllabi->images[0] : $syllabi->images;
    @endphp
    <div class="card">
      <a href="{{ asset('storage/'.$imagePath) }}" target="_blank">
        @if (pathinfo($imagePath, PATHINFO_EXTENSION) == 'pdf')
        <embed src="{{ asset('storage/'.$imagePath) }}" type="application/pdf" height="800px" width="100%" />
        @else
        <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $syllabi->name }}">
        @endif
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $syllabi->name }}</h5>
      </div>
    </div>
    @endforeach
  </section>

@endsection
