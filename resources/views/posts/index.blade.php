@extends('layout')

@section('content')
<h1>Blog</h1>
<a href="{{ route('posts.create') }}">Criar Post</a>
@foreach ($posts as $post)
    <div>
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', $post) }}">Editar</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </div>
@endforeach
@endsection
