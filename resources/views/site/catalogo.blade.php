@extends('site.app')
@section('content')

  
  <section class="container py-5">
    <h1>Confira os produtos</h1>
    <form action="{{ route('site.search') }}" method="post" class="bg-white">
      @csrf
      <div class="col-md-12">
          <div class="col-md-12">
            <input type="text" name="search" placeholder="Buscar Produto..." class="form-control">
          </div>
         <div class="col-md-12 col-12 m-auto text-end"> <br> 
          <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Filtrar</button>
          </div>
        </div>
  </form>
  <hr> 
  @if(session('message'))
      <div>
          {{session('message')}}
      </div>
  @endif

    <div class="row projects gx-lg-5">
      @foreach ($produtos as $p)
        <a href="work-single.html" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
            <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                <img href="#" class="card-img-top" src="{{ url("storage/{$p->imagem}") }}" alt="{{ $p->descricao }}">
                <div class="card-body">
                    <h5 class="card-title light-300 text-dark">{{$p->desc_categoria}}</h5>
                    <p class="card-text light-300 text-dark">
                      {{$p->descricao}}
                    </p>
                    <span class="text-decoration-none text-success light-300">
                      <span> 
                      @if ($p->desconto > 0 )
                        <i class='bx bxs-hand-right ms-1'></i> De: {{$p->preco}} </span> <br>   
                        <i style="text-decoration: line-through; color:red;g" class='bx bxs-hand-right ms-1'></i> Por {{$p->desconto}}  
                      @else
                      <i class='bx bxs-hand-right ms-1'></i> De: {{$p->preco}} </span> <br>
                      @endif  
                      </span>
                </div>
            </div>
        </a>
      @endforeach      
  </div>
  </section>
@endsection