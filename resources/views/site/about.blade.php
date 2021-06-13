@extends('site.app')
@section('content')

    <!-- Start Banner Hero -->
    <section class="bg-light w-100">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-6 text-start">
                    <h1 class="h2 py-5 text-primary typo-space-line">Sobre</h1>
                    <p class="light-300">
                        Revolucione a forma com que você compra seus medicamentos e sua ida a farmácia.
                        O sistema Pharmacy Finder tem como objetivo, monitorar e informar o endereço, horário de funcionamento, preço de medicamentos e produtos diversos existentes nas farmácias da sua região! 
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="./assets/img/banner-img-02.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Team Member -->
    <section class="container py-5">
        <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

            <div class="col-lg-3">
                <h2 class="h2 py-5 typo-space-line">Nosso Time</h2>
                <p class="text-muted light-300">
                    Conheça os desenvolvedores do projeto

                </p>
            </div>

            <div class="col-lg-9 row">
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/team-01.jfif" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Vitor Siqueira</li>
                        <li>Desenvolvedor</li>
                    </ul>
                </div>
                <div class="team-member col-md-4">
                </div>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="./assets/img/VITOR.jfif" alt="Card image">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li>Thomaz Benevento</li>
                        <li>SEO</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- End Team Member -->

    <!-- Start Our Partner -->
    <section class="bg-success py-3">
        <div class="container py-5">
            <h2 class="h2 text-white text-center py-5">Nosso Time</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 text-white bx bxs-buildings'></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 bx text-white bxs-check-shield bx-lg'></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 text-white bx bxs-bolt-circle'></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card partner-wap py-5">
                        <a href="#"><i class='display-1 text-white bx bxs-spa'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Our Partner-->
    <!-- Start Choice -->
    <section class="why-us banner-bg bg-light">
        <div class="container my-4">
            <div class="row">
                <div class="banner-img col-lg-5">
                    <img src="./assets/img/work.svg" class="rounded img-fluid" alt="">
                </div>
                <div class="banner-content col-lg-7 align-self-end">
                    <h2 class="h2 pb-3">Por que escolher a Phamacy Finder?</h2>
                    <p class="text-muted pb-5 light-300">
                        Depois de conhecer a Pharmacy Finder você
                        vai revolucionar a sua busca por farmácias para sempre!

                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choice -->

    <!-- Start Aim -->
    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-bulb text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Nossa Missão</h2>
                    <p class="light-300">
                        Facilitar e levar praticidade a sua vida nesse momento complicado de Covid-19
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class='display-4 bx bx-revision text-light'></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Informações na palma da sua mão</h2>
                    <p class="light-300">
                        Tenha as informações mais importantes das farmácias tudo em um único local!
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-select-multiple text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Compre sem sair de casa!</h2>
                    <p class="light-300">
                        Veja os preços, escolha seus produtos e peça para entregar 
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Aim -->

    <!-- Start Contact -->
    <section class="banner-bg bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto my-4 p-3">
                    <form action="#" method="get"><h1 class="h2 text-center">Seja um Parceiro</h1>
                    <div class="input-group py-3">
                    
                        <input name="email" type="text" class="form-control form-control-lg rounded-pill rounded-end" id="email" placeholder="Seu Melhor Email" aria-label="Your Email">
                        <button class="btn btn-secondary text-white btn-lg rounded-pill rounded-start px-lg-4" type="submit">Enviar</button>
                    </div>
                    <p class="text-center light-300">
                        Caso tenha uma farmácia e quiser parceria com a Pharmacy<br>
                        Finder deixe o seu e-mail acima que entraremos em contato!

                    </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact -->
@endsection