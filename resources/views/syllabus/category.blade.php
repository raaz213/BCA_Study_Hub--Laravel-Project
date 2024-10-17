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
            background-image: url('assets/img/img3.jpg');
            background-size: 100%;

        }
        .card-container {
            display: flex;
            justify-content: flex-start;
            padding: 80px 80px;
            gap: 100px;
            text-align: center;
            flex-wrap: wrap;
        }

        .card {
            border: 4px solid rgb(22, 71, 230);
            box-shadow: 0 0 20px #ebf834;
            flex-basis: calc(33.33% - 100px);
            margin-bottom: 20px;
            border-radius: 15px;

        }

        .card-body {
            background-color: rgb(0, 255, 136);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="card-container">
        @foreach($categories as $category)
        @php
        $imagePath = is_array($category->images) ? $category->images[0] : $category->images;
        @endphp
        <div class="card" style="width: 18rem;" onclick="window.location.href = '/syllabus/{{$category->id}}/subcategories'">
            <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="{{ $category->name }}">
            <div class="card-body">
                <h2 class="card-title">{{ $category->name }}</h2>
            </div>
        </div>
        @endforeach

    </div>

</body>

</html>
@endsection