@extends('site.app')
@section('content')



    <!-- Start Pricing Horizontal Section -->
    <section class="bg-light pt-sm-0 py-5">
        <div class="container py-5">

            <h1 class="h2 semi-bold-600 text-center mt-2">Nossas Unidades</h1>
        <p class="text-center pb-5 light-300">Encontre a unidade mais próxima de você agora Mesmo</p>

             @foreach ($farmacias as $farmacia)

            <!-- Start Pricing Horizontal -->
            <div class="pricing-horizontal row col-10 m-auto d-flex shadow-sm rounded overflow-hidden my-5 bg-white">
                <div class="pricing-horizontal-icon col-md-3 text-center bg-success text-light py-4">
                    <i class="display-1 bx bx-package pt-4"></i>
                    <h5 class="h5 semi-bold-600 pb-4 light-300">Unidade</h5>
                </div>
                <div class="pricing-horizontal-body offset-lg-1 col-md-5 col-lg-4 d-flex align-items-center pl-5 pt-lg-0 pt-4">
                    <ul class="text-left px-4 list-unstyled mb-0 light-300">
                        <li><i class="bx bxs-circle me-2"></i>{{$farmacia->filial}}</li>
                        <li><i class="bx bxs-circle me-2"></i>{{$farmacia->endereco}}</li>
                        <li><i class="bx bxs-circle me-2"></i>{{$farmacia->telefone}}</li>
                    </ul>
                </div>
                <div class="pricing-horizontal-tag col-md-4 text-center pt-3 d-flex align-items-center">
                    <div class="w-100 light-300">
                        <p>24 Horas</p>
                        <a href="#" class="btn rounded-pill px-4 btn-outline-primary mb-3">Fale Conosco</a>
                    </div>
                </div>
            </div>
            <!-- End Pricing Horizontal -->
            @endforeach

        </div>
    </section>
    <!--End Pricing Horizontal Section-->

@endsection