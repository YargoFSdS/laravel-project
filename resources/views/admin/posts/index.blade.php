@extends('admin.layouts.app')

@section('title','Editar Post')

<h3>Listagem</h3>
<hr>
<a href="{{route('posts.create')}}"> Cadastrar Post</a>
<hr>
<form action="{{ route('posts.search') }}" method="post" class="bg-white">
    @csrf
    <div class="max-w-sm my-4 p-1 pr-0 flex items-center">
        <input type="text" name="search" placeholder="Filtrar:" class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none">
        <button type="submit" class="uppercase p-3 rounded bg-blue-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Filtrar</button>
    </div>
</form>

@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif
@foreach ($posts as $post)
    <p>
        <img src="{{ url("storage/{$post->image}") }}"  alt="{{ $post->title }}" style="max-width:100px;" />
        {{$post->title}}
        <a href="{{route('posts.show',$post->id)}}">Ver</a>
        <a href="{{route('posts.edit',$post->id)}}">Editar</a>
    </p> 
<hr>    
@endforeach
@if (isset($filters))
    {{ $posts->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif