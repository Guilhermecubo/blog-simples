@extends('layout')

@section('content')
<h1>Editar Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}" required>
    <textarea name="content" required>{{ $post->content }}</textarea>
    <button type="submit">Salvar</button>
</form>
@endsection
