@extends('site.app')
@section('content')

<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                Farmácias <strong>Tamoio</strong> 
                          </h1>
                            <p class="banner-body py-3 mx-0 px-0">
                                <h3>Festival de Ofertas <br>
                                Aproveite todas as ofertas da semana da farmácia Tamoio para você! <br>
                                Ofertas até 70% OFF
                                </h3>

                          </p>

                        </div>
                    </div>

                </div>
                <div class="carousel-item">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                FACILITA A SUA VIDA!
                            </h1>
                            <p class="banner-body text-muted py-3">
                               <h2>
                                Encontre a farmácia mais próxima de você sem precisar sair de sua casa! <br>
                               Nossa preocupação é você.
                               </h2>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                ENTREGA GRÁTIS!
                            </h1>
                            <p class="banner-body text-muted py-3">
                                <h2>
                                    Estamos sempre buscando o melhor para você! Faça a sua compra e o frete fica por nossa conta!
                                </h2>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <i class='bx bx-chevron-left'></i>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <i class='bx bx-chevron-right'></i>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!-- End slider -->

    </div>
</div>
<!-- End Banner Hero -->



<!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="container-fluid pb-3">
        <div class="row">
            <h2 class="h2 text-center col-12 py-5 semi-bold-600">
                Farmácias Tamoio
            </h2>
            
        </div>
        <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
            Chegamos em Niterói para revoluciar as compras nas farmácias! <br>
            Faça sua compra de forma totalmente online sem precisar sair de sua casa e correr riscos. Entre em contato com o atendente em poucos segundos, tenha informações de contatos alguns cliques. Revolucione a forma com que você compra seus medicamentos e sua ida a farmácia!


        </p>
    </div>
</section>

<!-- Start View Work -->
<section class="bg-success">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300">Temos Delivery </h3>
                <p class="light-300">Entre em contato através do Whatsapp.</p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="https://api.whatsapp.com/send/?phone=5521974511346&text&app_absent=0" class="btn btn-success rounded-pill btn-block shadow px-4 py-2 text-white" >Whatsapp</a>
            </div>
        </div>
    </div>
</section>
<!-- End View Work -->

<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Linha de Produtos Tamoio</h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4">

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/conveniencia.png" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                        </div>
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/GENERICOS.png" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/HIGIENE.png" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/INFANTIL.png" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/MEDICAMENTOS.png" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                    </div>
                </a>
            </div><!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-4 mb-3">
                <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="./assets/img/saude_e_beleza.png" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                    </div>
                </a>
            </div><!-- End Recent Work -->

        </div>
    </div>
</section>
<!-- End Recent Work -->
@endsection