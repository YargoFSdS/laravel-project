@extends('layouts.app')

@section('title','Farmácias')

@section('content')
<div class="max-w-sm my-4 p-1 pr-0 flex items-center">
    <a href="{{route('farmacias.create')}}" class="uppercase p-3 rounded bg-blue-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg"> 
        Cadastrar Farmácia
    </a>
</div>

<form action="{{ route('farmacias.search') }}" method="post" class="bg-white">
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
        <th class="text-left">Farmácia</th>
        <th class="text-left">Endereço</th>
        <th class="text-left">Bairro</th>
        <th class="text-left">Cidade</th>
        <th class="text-left">Gerente</th>
        <th class="text-left">Telefone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($farmacias as $farmacia)
        <tr>
        <td>{{$farmacia->filial}}</td>
        <td>{{$farmacia->endereco}}</td>
        <td>{{$farmacia->bairro}}</td>
        <td>{{$farmacia->cidade}}</td>
        <td>{{$farmacia->gerente}}</td>
        <td>{{$farmacia->telefone}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@if (isset($filters))
    {{ $farmacias->appends($filters)->links() }}
@else
    {{ $farmacias->links() }}
@endif
@endsection
