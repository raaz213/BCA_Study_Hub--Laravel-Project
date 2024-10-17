@extends('layout.main') 
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    body {
      background-color: rgb(44, 40, 40);
    }

    .card-container {
      display: flex;
      justify-content: flex-start;
      padding: 15px 80px;
      gap: 20px;
      text-align: center;
      flex-wrap: wrap;
    }

    .card {
      border: 2px solid black;
      transition: transform 0.3s;
      position: relative;
      background-color: rgb(235, 230, 240);
    }

    .card:hover {
      background-color: aqua;
      opacity: 0.5;
      border: 1px solid #bebebe;
    }
  </style>
</head>

<body>
  <section class="card-container">
    @foreach($subcategories as $subcategory)
    @php
    $imagePath = (is_array($subcategory->images) && count($subcategory->images) > 0) ? $subcategory->images[0] : 'default-image.jpg';
    @endphp
    <div class="card" style="width: 18rem;" onclick="window.location.href = '/syllabus/{{$subcategory->id}}/syllabus'">
      <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$subcategory->name}} </h5>
      </div>
    </div>
    @endforeach
  </section>
</body>

</html>
@endsection
