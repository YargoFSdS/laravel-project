@extends('layouts.app')

@section('title','Cadastrar Post')

@section('content')
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @include('admin.posts._partials.form')
</form>

@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

@endsection