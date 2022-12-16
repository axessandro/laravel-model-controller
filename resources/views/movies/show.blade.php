@extends('layouts.app')

@section('content')
    <div class="container">
        <button class="btn btn-danger"><a href="/">Home</a></button>
        <button class="btn btn-danger"><a href="/movies">List</a></button>
        <h1>{{ $movies[$index]->title }}</h1>
    </div>
@endsection
