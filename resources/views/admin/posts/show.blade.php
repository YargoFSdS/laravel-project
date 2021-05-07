@extends('admin.layouts.app')
@section('title','Editar Post')

@section('content')
<h1>Detalhes do Post </h1>

<ul>
    <li>{{$post->title}}</li>
    <li>{{$post->content}}</li>
</ul>

<form action="{{route('posts.destroy',$post->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="delete">
    <button type="submit">Deletar o Post</button>
</form>

@endsection