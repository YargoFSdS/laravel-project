@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@csrf
<div class="grid grid-cols-3 gap-1">
    <div class="col-span-3 sm:col-span-1">
      <label for="company_website" class="block text-sm font-medium text-gray-700">
        Título
      </label>
      <div class="mt-1 flex rounded-md shadow-sm">
        <input class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" type="text" name="title" id="title" placeholder="Título" value="{{$post->title ?? old('title') }}">
      </div>
    </div>
    <div class="col-span-3 sm:col-span-2">
        <label for="conteudo" class="block text-sm font-medium text-gray-700">
          Conteúdo
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
            <textarea class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" name="content" id="content" placeholder="Conteúdo">{{$post->content ?? old('content') }}</textarea>
        </div>
    </div>
    <div class="col-span-3 sm:col-span-2">
        <label for="conteudo" class="block text-sm font-medium text-gray-700">
          Imagem
        </label>
        <div class="mt-1 flex rounded-md shadow-sm">
            <input type="file" name="image" id="imagem" >
        </div>
    </div>
    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> Enviar </button>
    </div>
  </div>
  
