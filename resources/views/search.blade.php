@extends('layout.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            body {
                background-color: rgb(44, 40, 40);
            }
            .container {
                display: flex;
                flex-wrap: wrap;
                width: 100%;
                margin-bottom: 20px;
            }
            .card-container {
                display: flex;
                justify-content: flex-start;
                padding: 15px 10px;
                gap: 30px;
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

            h2 {
                color: rgb(219, 214, 214);
                text-align: center;
                margin: 30px 0;
            }
        </style>
    </head>

    <body>
        <h2>Search Result : {{ $search }} </h2>
        <div class="container">
            <section class="card-container">
                @foreach ($categories as $category)
                    @php
                        $imagePath =
                            is_array($category->images) && count($category->images) > 0
                                ? $category->images[0]
                                : 'default-image.jpg';
                    @endphp
                    <div class="card" style="width: 18rem;"
                        onclick="window.location.href = '/notes/{{ $category->id }}/subcategories'">
                        <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }} </h5>
                        </div>
                    </div>
                @endforeach
            </section>
            <section class="card-container">
                @foreach ($products as $product)
                    @php
                        $imagePath =
                            is_array($product->subcategory->images) && count($product->subcategory->images) > 0
                                ? $product->subcategory->images[0]
                                : 'default-image.jpg';
                    @endphp
                    <div class="card" style="width: 18rem;"
                        onclick="window.location.href = '/notes/{{ $product->id }}/notes'">
                        <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }} </h5>
                        </div>
                    </div>
                @endforeach
            </section>
            <section class="card-container">
                @foreach ($syllabus as $syllabi)
                    @php
                        $imagePath =
                            is_array($syllabi->subcategory->images) && count($syllabi->subcategory->images) > 0
                                ? $syllabi->subcategory->images[0]
                                : 'default-image.jpg';
                    @endphp
                    <div class="card" style="width: 18rem;"
                        onclick="window.location.href = '/syllabus/{{ $syllabi->id }}/syllabus'">
                        <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $syllabi->name }} </h5>
                        </div>
                    </div>
                @endforeach
            </section>
            <section class="card-container">
                @foreach ($chapters as $chapter)
                    @php
                        $imagePath =
                            is_array($chapter->images) && count($chapter->images) > 0
                                ? $chapter->images[0]
                                : 'default-image.jpg';
                    @endphp
                    <div class="card" style="width: 18rem;"
                        onclick="window.location.href = '/notes/{{ $chapter->id }}/notes'">
                        <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $chapter->name }} </h5>
                            <h6 class="card-title">{{ $chapter->subcategory->name }} </h6>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </body>

    </html>
@endsection
