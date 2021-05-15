@extends('layouts.app')

@section('title','Cadastro de Produtos')

@section('content')
<div>
    
    <div class="md:grid md:grid-cols-2 md:gap-2">
      <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                <div class="grid grid-cols-3 gap-1">
                <div class="col-span-3 sm:col-span-2">
                  <label for="company_website" class="block text-sm font-medium text-gray-700">
                    Descrição
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="descricao" id="descricao" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                  </div>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <label for="preco" class="block text-sm font-medium text-gray-700">
                      Status
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select name="ativo" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                    </div>
                  </div>
              </div>
              <div class="grid grid-cols-3 gap-6">
                
                <div class="col-span-3 sm:col-span-1">
                    <label for="preco" class="block text-sm font-medium text-gray-700">
                      Preço
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="preco" id="preco" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                    </div>
                  </div>
                  
                  <div class="col-span-3 sm:col-span-1">
                    <label for="desconto" class="block text-sm font-medium text-gray-700">
                      Desconto
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="desconto" id="desconto" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                    </div>
                  </div>

                  
                  <div class="col-span-3 sm:col-span-1">
                    <label for="categoria" class="block text-sm font-medium text-gray-700">
                      Categoria
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select name="categorias_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            @foreach ($categorias as $c)
                                <option value="{{$c->id}}">{{$c->descricao}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-gray-700">
                      Cover photo
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Envie Imagem</span>
                            <input type="file" name="image" id="imagem" class="sr-only" >
                          </label>

                          <p class="pl-1">ou arraste e solte uma imagem</p>
                        </div>
                        <p class="text-xs text-gray-500">
                          PNG, JPG, GIF up to 10MB
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Salvar
                    </button>
                  </div>


          </div>
        </form>
      </div>
    </div>
  </div>

</form>

@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif


@endsection