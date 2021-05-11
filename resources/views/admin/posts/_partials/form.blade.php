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
<input type="text" name="title" id="title" placeholder="Título" value="{{$post->title ?? old('title') }}">
<textarea name="content" id="content" placeholder="Conteúdo">{{$post->content ?? old('content') }}</textarea>
<input type="file" name="image" id="imagem" >
<button type="submit"> Enviar </button>