@extends('layouts.app')

@section('content')
    <div class="container">
        <button class="btn btn-danger"><a href="/">Home</a></button>
        <button class="btn btn-danger"><a href="/movies">List</a></button>

        <div class="container">

            <div class="ms-card">
                <div class="img-wrapper">
                    <img src="{{ $movies[$index]->image }}" alt="">
                </div>

                <div class="text-wrapper">
                    <h1>{{ $movies[$index]->title }}</h1>
                    <h3>{{ $movies[$index]->original_title }}</h3>
                    <h5>{{ $movies[$index]->date }}</h5>
                    <h5>Vote: {{ $movies[$index]->vote }}</h5>

                </div>
            </div>
        </div>
    </div>
@endsection
