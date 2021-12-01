@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @foreach ($posts as $post)

    <h3>{{ $post->title }}</h3>
    <hr>
        
    @endforeach 

@endsection