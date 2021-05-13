@extends('layouts.app')

@section('title','Farmácias')

@section('content')
<div>
    
    <div class="md:grid md:grid-cols-2 md:gap-2">
      <div class="mt-5 md:mt-0 md:col-span-2">
    <form action="{{route('farmacias.store')}}" method="POST">
        @csrf
        
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                <div class="grid grid-cols-3 gap-1">
                <div class="col-span-3 sm:col-span-1">
                  <label for="company_website" class="block text-sm font-medium text-gray-700">
                    Filial
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="filial" id="filial" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                  </div>
                </div>
                <div class="col-span-3 sm:col-span-2">
                    <label for="endereco" class="block text-sm font-medium text-gray-700">
                      Endereço
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="endereco" id="endereco" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                    </div>
                  </div>
              </div>

              <div class="grid grid-cols-3 gap-6">
                
                <div class="col-span-3 sm:col-span-1">
                    <label for="bairro" class="block text-sm font-medium text-gray-700">
                      Bairro
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="bairro" id="bairro" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                    </div>
                </div>

                <div class="col-span-3 sm:col-span-1">
                  <label for="bairro" class="block text-sm font-medium text-gray-700">
                    Estado
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="estado" id="estado" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                  </div>
                </div>

                <div class="col-span-3 sm:col-span-1">
                    <label for="bairro" class="block text-sm font-medium text-gray-700">
                        Cidade
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="cidade" id="cidade" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="">
                    </div>
                </div>
              </div>

              <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 sm:col-span-2">
                  <label for="bairro" class="block text-sm font-medium text-gray-700">
                    Geolocalização
                  </label>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="latitude" id="latitude" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Latitude">
                  </div>
                  <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" name="longitude" id="longitude" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Longitude">
                  </div>
                </div>
                <div class="col-span-3 sm:col-span-1">
                    <label for="bairro" class="block text-sm font-medium text-gray-700">
                        Contato
                    </label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="gerente" id="gerente" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Gerente">
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                      <input type="text" name="telefone" id="telefone" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Telefone">
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