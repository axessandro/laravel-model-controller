@extends('layouts.app')

@section('content')
    <div class="container">
        <button class="btn btn-danger"><a href="/">Home</a></button>
        <h1>List</h1>
        <div class="row row-cols-lg-4 row-cols-md-2">

            @foreach ($movies as $index => $movie)
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ $movie->image }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                            <a href="{{ route('movies.show', $index) }}" class="btn btn-warning">MORE</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
