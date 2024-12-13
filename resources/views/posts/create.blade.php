@extends('layout')

@section('content')
<h1>Criar Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Título" required>
    <textarea name="content" placeholder="Conteúdo" required></textarea>
    <button type="submit">Criar</button>
</form>
@endsection
