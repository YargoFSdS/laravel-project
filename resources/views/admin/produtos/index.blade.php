@extends('layouts.app')

@section('title','Farmácias')

@section('content')
<div class="max-w-sm my-4 p-1 pr-0 flex items-center">
    <a href="{{route('produtos.create')}}" class="uppercase p-3 rounded bg-blue-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg"> 
        Cadastrar Produto
    </a>
</div>

<form action="{{ route('produtos.search') }}" method="post" class="bg-white">
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

<hr>
<table class="table-auto" style="width:100%;">
    <thead>
        <tr>
        <th class="text-left">Imagem</th>
        <th class="text-left">Descrição</th>
        <th class="text-left">Preço</th>
        <th class="text-left">Desconto</th>
        <th class="text-left">Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $p)
        <tr>
        <td><img src="{{ url("storage/{$p->imagem}") }}"  alt="{{ $p->descricao }}" style="max-width:100px;" /></td>
        <td>{{$p->descricao}}</td>
        <td>{{$p->preco}}</td>
        <td>{{$p->desconto}}</td>
        <td>{{$p->desc_categoria}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@if (isset($filters))
    {{ $produtos->appends($filters)->links() }}
@else
    {{ $produtos->links() }}
@endif
@endsection
