@extends('site.app')
@section('content')


    <!-- Start Banner Hero -->
    <div id="work_single_banner" class="bg-light w-100">
        <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
            <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
                <h1 class="banner-heading h2 pb-5 typo-space-line-center">Informativo Covid</<h1>
                </h1>
                <h3 class="h4 pb-2 light-300">Fique por Dentro</h3>
                <p class="banner-footer light-300">
                    Estamos vivendo tempos difíceis de bastante incertezas. <br>
                    Pensando nisso decidimos criar essa parte para atualizar a todos sobre as novidades descobertas do COVID-19.
                </p>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Work Sigle -->
    @foreach ($posts as $post)
    <section class="container py-5">

    	<div class="row pt-5">
            <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line">{{$post->title}}</h2>
            </div>
        </div>

        <div class="row justify-content-center pb-4">
            <div class="col-lg-8">
                <div id="templatemo-slide-link-target" class="card mb-3">
                    <img class="img-fluid border rounded" src="{{ url("storage/{$post->image}") }}"  alt="{{ $post->title }}" >
                </div>
                <div class="worksingle-slide-footer row">

                    <!--Start Controls-->
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class='bx bxs-chevron-left bx-sm text-dark'></i>
                        </a>
                    </div>
                    <!--End Controls-->

                </div>
            </div>
        </div><!-- End Slider -->

      

        <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <p class="display-6 py-4 ps-4 border border-5 border-top-0 border-end-0 border-bottom-0 border-start">
                    <i>
                          {{$post->content}}
                      </i>
                </p>
                  </div>
        </div><!-- End Qute -->

        
    </section>
    @endforeach
    <!-- End Work Sigle -->
@endsection