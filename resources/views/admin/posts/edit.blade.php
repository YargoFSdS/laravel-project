<h1>Editar Post {{$post->title}}</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('posts.update', $post->id)}}" method="post" >
    @method('put')
    @csrf    
    <input type="text" name="title" id="title" placeholder="Título" value="{{$post->title}}">
    <textarea name="content" id="content" placeholder="Conteúdo">{{$post->content}}</textarea>
    <button type="submit"> Alterar </button>
</form>