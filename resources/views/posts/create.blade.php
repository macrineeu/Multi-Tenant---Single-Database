@extends('layouts.app')

@section('content')

    <h1>Cadastrar Posts</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Titulo">
        </div>
        <div class="form-group">
            <textarea name="body" class="form-control" cols="30" rows="10" placeholder="Descricao"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
        </div>
    </form>

@endsection