<h1>Cadastrar Novo Post</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="title" id="title" placeholder="Título" value="{{@old('title')}}">
    <textarea name="content" id="content" placeholder="Conteúdo">{{@old('content')}}</textarea>
    <button type="submit"> Enviar </button>

</form>