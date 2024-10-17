@extends('layout.main')
@section('content')

  <section class="card-container">
    @foreach($products as $product)
    @php
    $imagePath = is_array($product->images) ? $product->images[0] : $product->images;
    @endphp
    <div class="card">
      <a href="{{ asset('storage/'.$imagePath) }}" target="_blank">
        @if (pathinfo($imagePath, PATHINFO_EXTENSION) == 'pdf')
        <embed src="{{ asset('storage/'.$imagePath) }}" type="application/pdf" height="800px" width="100%" />
        @else
        <img src="{{ asset('storage/'.$imagePath) }}" alt="{{ $product->name }}">
        @endif
      </a>
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
      </div>
    </div>
    @endforeach
  </section>

@endsection
