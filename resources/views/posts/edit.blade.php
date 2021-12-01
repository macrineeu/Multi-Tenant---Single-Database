@extends('layouts.app')

@section('content')

    <h1>Cadastrar Posts</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Titulo" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" cols="30" rows="10" placeholder="Descricao">{{ $post->body }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-success">Editar</button>
        </div>
    </form>

@endsection