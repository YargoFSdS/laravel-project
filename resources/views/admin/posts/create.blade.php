<h1>Cadastrar Novo Post</h1>
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>            
        @endforeach
    </div>
@endif
<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="title" id="title" placeholder="T�tulo" value="{{@old('title')}}">
    <textarea name="content" id="content" placeholder="Conte�do">{{@old('content')}}</textarea>
    <button type="submit"> Enviar </button>

</form>