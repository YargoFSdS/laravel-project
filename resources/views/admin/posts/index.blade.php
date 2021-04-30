<h3>Listagem</h3>
<hr>
<a href="{{route('posts.create')}}"> Cadastrar Post</a>
<hr>
@if(session('message'))
    <div>
        {{session('message')}}
    </div>
@endif
@foreach ($posts as $post)
    <p>
        {{$post->title}}
        <a href="{{route('posts.show',$post->id)}}">Ver</a>
    </p> 
    
    
@endforeach