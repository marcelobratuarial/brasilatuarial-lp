<!DOCTYPE html>
<html lang="pt" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Consultoria Atuarial</title>

  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon_io/site.webmanifest">
  <!--<link rel="manifest" href="/assets/img/favicons/braben/manifest.json">-->
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/favicon_io/favicon-16x16.png">
  <meta name="theme-color" content="#ffffff">
  <!-- <meta property="og:url" content="//brasilbeneficios.club" /> -->
  <!-- <meta property="og:type"               content="article" />-->
  <meta property="og:title" content="Brasil Atuarial" />
  <meta property="og:description" content="Brasil Atuarial" />
  <meta property="og:image" content="assets/img/logo.png" />
  <!--<meta property="og:image" itemprop="image" content="/assets/img/favicons/braben/apple-icon-180x180.png">-->
  <!--<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">-->
  <!--<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">-->
  <!--<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">-->
  <!--<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">-->
  <!--<link rel="manifest" href="assets/img/favicons/manifest.json">-->
  <!--<meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">-->
  <!--<meta name="theme-color" content="#ffffff">-->


  <link rel="preload" as="style" data-href="assets/lib/prismjs/prism.css">
  <link rel="preload" as="style" data-href="assets/lib/loaders.css/loaders.min.css">
  <link rel="preload" as="style" data-href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700">
  <link rel="preload" as="style" data-href="https://fonts.googleapis.com/css?family=Source+Sans+Pro">
  <link rel="preload" as="style" data-href="assets/lib/remodal/remodal.css">
  <link rel="preload" as="style" data-href="assets/lib/remodal/remodal-default-theme.css">
  <!-- <link href="assets/lib/owl.carousel/owl.carousel.css" rel="stylesheet"> -->
  <link rel="preload" as="style" data-href="assets/lib/lightbox2/css/lightbox.css">
  <link rel="preload" as="style" data-href="assets/lib/semantic-ui-accordion/accordion.min.css">
  <link rel="preload" as="style" data-href="assets/lib/semantic-ui-transition/transition.min.css">
  <link rel="preload" as="style" data-href="assets/css/theme.css">
  <!-- <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="assets/css/theme.css"> -->
  <style>
    .rotateme {
      -webkit-animation-name: rotateme;
      animation-name: rotateme;
      -webkit-animation-duration: 30s;
      animation-duration: 30s;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear
    }

    @keyframes rotateme {
      from {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
      }
      to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
      }
    }

    @-webkit-keyframes rotateme {
      from {
        -webkit-transform: rotate(0deg)
      }
      to {
        -webkit-transform: rotate(360deg)
      }
    }

    .preloader {
      background-color: #f7f7f7;
      width: 100%;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 999999;
      -webkit-transition: .6s;
      -o-transition: .6s;
      transition: .6s;
      margin: 0 auto
    }

    .preloader .preloader-circle {
      width: 100px;
      height: 100px;
      position: relative;
      border-style: solid;
      border-width: 1px;
      border-top-color: #1e4f8c;
      border-bottom-color: transparent;
      border-left-color: transparent;
      border-right-color: transparent;
      z-index: 10;
      border-radius: 50%;
      -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
      box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
      background-color: #fff;
      -webkit-animation: zoom 2000ms infinite ease;
      animation: zoom 2000ms infinite ease;
      -webkit-transition: .6s;
      -o-transition: .6s;
      transition: .6s
    }

    .preloader .preloader-circle2 {
      border-top-color: #0078ff
    }

    .preloader .preloader-img {
      position: absolute;
      top: 50%;
      z-index: 200;
      left: 0;
      right: 0;
      margin: 0 auto;
      text-align: center;
      display: inline-block;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      padding-top: 6px;
      -webkit-transition: .6s;
      -o-transition: .6s;
      transition: .6s
    }

    .preloader .preloader-img img {
      max-width: 55px
    }

    .preloader .pere-text strong {
      font-weight: 800;
      color: #dca73a;
      text-transform: uppercase
    }

    @-webkit-keyframes zoom {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .6s;
        -o-transition: .6s;
        transition: .6s
      }
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: .6s;
        -o-transition: .6s;
        transition: .6s
      }
    }

    @keyframes zoom {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: .6s;
        -o-transition: .6s;
        transition: .6s
      }
      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: .6s;
        -o-transition: .6s;
        transition: .6s
      }
    }
    p.lead {
      text-align: justify;
    }

    @media screen and (max-width: 900px) {
      .bg-holder {
        /* display: none; */
      }
    }
  </style>
</head>


<body>
<?php
<<<<<<< Updated upstream
  $bal = file_get_contents("content-brasil-atuarial-ben.json");
  $items = json_decode($bal, false); 
=======
  // $bal = file_get_contents("content-brasil-atuarial-ben.json");
  // $items = json_decode($bal, false); 
>>>>>>> Stashed changes
  
?>
  <main>

    <?php /*
    <div id="preloader">
      <div class="loader"><span></span><span></span><span></span><span></span></div>
    </div>
    */ ?>

     <!--? Preloader Start -->
      <div id="preloader-active">
          <div class="preloader" style="display: flex; justify-content: center;align-items: center;">
              <div class="preloader-inner position-relative">
                  <div class="preloader-circle"></div>
                  <div class="preloader-img pere-text">
                      <img src="assets/img/logo/loder.png" alt="">
                  </div>
              </div>
          </div>
      </div>
      <!-- Preloader Start -->
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="p-0" id="home">

      <div class="container-fluid p-0 minh-100vh">
        <div class="position-relative px-3 w-sm-50 position-sm-absolute" id="baseContent">
          <div class="row align-items-center minh-50vh justify-content-center py-5 minh-sm-100vh">
            <div class="bg-holder overlay overlay-youtube" style="background-image:url(assets/img/header-split-youtube-background.jpg);">
              <div class="bg-youtube" data-property='{"videoURL":"http://youtu.be/RH2ecDWsWLI","startAt":0,"stopAt":599}'></div>
            </div>
            <!--/.bg-holder-->

            <div class="col-sm-10 col-xxl-7 z-index-1 text-center text-white">
              <!-- <h1 class="font-weight-light fs-3 fs-lg-4 fs-xl-5 text-white">We are boots'4</h1>
                <p class="fs-1 fs-xl-2 text-white mt-2" style="line-height: 1.2; opacity: 0.7;">For over 20 years we???ve worked with
                  <br class="d-none d-lg-block">companies all around the globe.</p>
                <div class="mt-5">
                  <a class="btn btn-outline-light mr-3" href="#contact">Get a quote</a>
                  <a class="btn btn-link text-white mt-3 mt-sm-0 pl-0" href="#portfolio">See works<span class="ml-2 fas fa-chevron-right"></span></a>
                </div> -->
              <img class="the-logo w-75 w-sm-60" src="assets/img/logo-prata-min.png" alt="">
              <h1 style="text-shadow: 2px 2px 1px rgb(0 0 0);" class="font-weight-medium  text-white mt-4 fs-3 fs-xl-3 fs-lg-3 fs-md-3 fs-xs-3 fs-sm-3">Mais gest??o de risco e controle financeiro <br> <span class="text-success">na sua Entidade Mutualista.</span></h1>
              <p class="lead mt-3 text-white fs-1 text-center">Transformando dados em informa????o de forma a proporcionar 
              melhores tomadas de decis??es<br class="d-none d-sm-block d-lg-none d-xl-block">
              </p>
              <a class="btn btn-primary rounded-capsule mt-4" href="#contact"> Contrate nossos servi??os</a>
              <!--p class="text-500 mt-2">ir para o site</p-->
            </div>
          </div>
        </div>
        <div class="position-relative w-sm-50 position-sm-fixed four-item-one-column" id="gridNav">
          <div class="row h-lg-100vh">
            <div class="col-12 minh-25vh sidebar-item-wrapper py-5 py-sm-0" data-content="gestao-risco">
              <div class="bg-holder lazy" data-background="assets/img/navigation/about-min.webp" style=";background-position: 0 37%;">
              </div>
              <!--/.bg-holder-->

              <div class="sidebar-item">
                <!-- <img class="mb-2 mb-lg-3 nav-icon" src="assets/img/lineicons/favorites.svg" alt=""> -->
<<<<<<< Updated upstream
                <img class="mb-2 mb-lg-3 nav-icon" src="assets/img/icons/gestao-risco.svg" alt="">
=======
                <img class="mb-2 mb-lg-3 nav-icon" class="lazy" data-src="assets/img/icons/gestao-risco.svg" alt="">
>>>>>>> Stashed changes
                <h2 class="font-weight-light text-white fs-1 fs-xl-2 fs-xxl-3">Gest??o de Risco</h2>
              </div>
            </div>
            <div class="col-12 minh-25vh sidebar-item-wrapper py-5 py-sm-0" data-content="gestao-financeira">
              <div class="bg-holder lazy" data-background="assets/img/navigation/service-min.webp" style="background-position: 0 33%;">
              </div>
              <!--/.bg-holder-->

              <div class="sidebar-item">
<<<<<<< Updated upstream
                <img class="mb-2 mb-lg-3 nav-icon" src="assets/img/icons/gestao-financeira.svg" alt="">
=======
                <img class="mb-2 mb-lg-3 nav-icon" class="lazy" data-src="assets/img/icons/gestao-financeira.svg" alt="">
>>>>>>> Stashed changes
                <h2 class="font-weight-light text-white fs-1 fs-xl-2 fs-xxl-3">Gest??o Financeira</h2>
              </div>
            </div>
            <div class="col-12 minh-25vh sidebar-item-wrapper py-5 py-sm-0" data-content="gestao-estrategica">
              <div class="bg-holder lazy" data-background="assets/img/navigation/portfolio-min.webp" style="background-position: 0 20%;">
              </div>
              <!--/.bg-holder-->

              <div class="sidebar-item">
<<<<<<< Updated upstream
                <img class="mb-2 mb-lg-3 nav-icon" src="assets/img/icons/gestao-estrategica.svg" alt="">
=======
                <img class="mb-2 mb-lg-3 nav-icon" class="lazy" data-src="assets/img/icons/gestao-estrategica.svg" alt="">
>>>>>>> Stashed changes
                <h2 class="font-weight-light text-white fs-1 fs-xl-2 fs-xxl-3">Gest??o Estrat??gica</h2>
              </div>
            </div>
            <div class="col-12 minh-25vh sidebar-item-wrapper py-5 py-sm-0" data-content="avaliacao-atuarial">
              <div class="bg-holder lazy" data-background="assets/img/navigation/contact-min.webp" style="background-position: 0 25%;">
              </div>
              <!--/.bg-holder-->

              <div class="sidebar-item">
<<<<<<< Updated upstream
                <img class="mb-2 mb-lg-3 nav-icon" src="assets/img/icons/avaliacao-atuarial.svg" alt="">
=======
                <img class="mb-2 mb-lg-3 nav-icon" class="lazy" data-src="assets/img/icons/avaliacao-atuarial.svg" alt="">
>>>>>>> Stashed changes
                <h2 class="font-weight-light text-white fs-1 fs-xl-2 fs-xxl-3">Avalia????o Atuarial</h2>
              </div>
            </div>

            <div class="d-none col-12 minh-25vh sidebar-item-wrapper py-5 py-sm-0" data-content="contact">
<<<<<<< Updated upstream
                <div class="bg-holder" style="background-image:url(assets/img/navigation/contact.jpg);background-position: 0 25%;">
=======
                <div class="bg-holder lazy" data-background="assets/img/navigation/contact-min.webp" style="background-position: 0 25%;">
>>>>>>> Stashed changes
                </div>
                <!--/.bg-holder-->

                <div class="sidebar-item">
                  <img class="mb-2 mb-lg-3 nav-icon" src="assets/img/lineicons/placeholder.svg" alt="">
                  <h2 class="font-weight-light text-white fs-1 fs-xl-2 fs-xxl-3">Contact</h2>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <div class="page position-absolute t-0 w-100" id="gestao-risco">
      <div class="row no-gutters minh-100vh">
        <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-sm-0">


          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <section class="pt-5 pt-xl-7 pt-xxl-8">

            <div class="container-fluid">
              <div class="row justify-content-center pb-5" id="boots4-story">
                <div class="col-lg-10">
                  <div class="text-center mb-5 mb-lg-6">
                    <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">GEST??O DE </span> RISCO</h2>
                    <hr class="hr-ornate" />
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                      <div class="bg-holder position-relative rounded py-8 py-md-0 lazy" data-background="assets/img/infinity.webp" style="">
                      </div>
                      <!--/.bg-holder-->

                      <div class="position-absolute t-0 l-0 h-100 w-100 d-flex align-items-center justify-content-center">
                        <a class="video-modal text-white" href="https://www.youtube.com/watch?v=p6-WUWmV-fg" data-start="33" data-end="59"><span class="fa-layers fa-fw fs-5"><i class="fas fa-circle"></i><i class="text-primary fas fa-play" data-fa-transform="shrink-12 right-0.5"></i></span></a>
                      </div>
                    </div>
                    <div class="col-md-6 pl-3 pl-md-4">
                      <!-- <h4>To Infinity and Beyond!</h4> -->
                      <!-- <p class="lead my-3">At Boots4, we believe there is a way where customers are earned rather than bought. We're obsessively passionate about it, and our mission is to help you achieve it. </p> -->
                      <p class="text-justify ">
                        Com o intuito de melhorar os processos e alcan??ar os objetivos da entidade, a gest??o de
                        risco contribui para a antecipa????o aos riscos, atrav??s de ado????o de medidas que
                        reduzam o n??mero de incertezas que podem se materializar em problemas e minimizar
                        o efeito daquelas que venham a ocorrer. Desta forma, uma boa gest??o de risco significa
                        tentar evitar perdas, tentar diminuir a frequ??ncia ou a severidade de perdas.
                      </p>
                      <p class="text-justify ">
                        Os riscos existem e podem tornar o seu neg??cio vulner??vel. A origem dos riscos pode
                        ser <strong>externa</strong>, como por exemplo mudan??a de comportamento dos associados e
                        concorrentes, mudan??a tecnol??gica, novas leis e regula????es, ou <strong>interna</strong>, que surgem
                        dentro da estrutura da Entidade.
                      </p>
                      <p class="text-justify ">
                        Veja alguns exemplos de riscos envolvidos na opera????o de uma entidade autogest??o de
                        planos contra riscos patrimoniais e que podem ser identificados, analisados, tratados,
                        minimizados e monitorados:
                      </p>
                      <ul>
                        <li>Fraudes ou golpes financeiros;</li>
                        <li>Evento que prejudica a imagem da entidade;</li>
                        <li>Relacionamento com volunt??rios ou consultores;</li>
                        <li>Processos judiciais;</li>
                        <li>Falta de prestador ou falta de estrat??gia definida na gest??o de prestadores;</li>
                        <li>Produto mal estruturado;</li>
                        <li>Qualifica????o de equipe e colaboradores;</li>
                        <li>Risco de liquidez;</li>
                        <li>Risco operacional</li>

                      </ul>
                      <p class="text-justify ">
                        Portanto, a Brasil Atuarial Consultoria contribui para uma gest??o de risco embasada na
                        ado????o de melhores pr??ticas operacionais e mercadol??gicas, atrav??s do planejamento,
                        identifica????o, an??lise qualitativa, an??lise quantitativa, proposta de medidas estrat??gias
                        e monitoramento.
                      </p>
                      <p class="text-justify ">
                        Acreditamos que antecipar e gerenciar os riscos ?? a melhor forma de proporcionar
                        seguran??a ?? entidade como um todo.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="row justify-content-center" id="fun-facts">
                <div class="col-lg-10">
                  <div class="card-deck">
                    <div class="card border-2x border-warning rounded py-5 px-3 text-center">
                      <img class="position-absolute r-0 t-0" src="assets/img/shapes/1.png" alt="" style="width: 30%; border-top-right-radius: 1px;" />
                      <img class="mx-auto" src="assets/img/icons/lightbulb_idea.svg" width="70" alt="" /><span class="d-block fs-3 mt-2 text-dark" data-countup="64973">0</span>
                      <h5>Lines Of Code</h5>
                    </div>
                    <div class="card border-2x border-danger rounded py-5 px-3 text-center">
                      <img class="position-absolute b-0 r-0" src="assets/img/shapes/2.png" alt="" style="width: 70%; border-bottom-right-radius: 1px;" />
                      <img class="mx-auto" src="assets/img/icons/coffe.svg" width="70" alt="" /><span class="d-block fs-3 mt-2 text-dark" data-countup="10218">0</span>
                      <h5>Cups of Coffee</h5>
                    </div>
                    <div class="card border-2x border-primary rounded py-5 px-3 text-center">
                      <img class="position-absolute t-0 l-0" src="assets/img/shapes/3.png" alt="" style="width: 70%;" />
                      <img class="mx-auto" src="assets/img/icons/cloud.svg" width="70" alt="" /><span class="d-block fs-3 mt-2 text-dark" data-countup="7499">0</span>
                      <h5>Download</h5>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- end of .container-->

          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->




          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <!-- <section class="pt-0 text-center">

            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10 col-xxl-7 col-xl-9">
                  <div class="mb-5 mb-lg-6">
                    <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Meet Our </span> Team</h2>
                    <hr class="hr-ornate" />
                  </div>
                  <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/1.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Alex Butler</h5>
                      <h5 class="text-500 mb-1">Fraud Manager</h5>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/2.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Andreas Heim</h5>
                      <h5 class="text-500 mb-1">Software Engineer</h5>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/3.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Amanda Alleson</h5>
                      <h5 class="text-500 mb-1">UX Designer</h5>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/4.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Brandon Renfrow</h5>
                      <h5 class="text-500 mb-1">Developer</h5>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/5.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Brian Childs</h5>
                      <h5 class="text-500 mb-1">Training Manager</h5>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/6.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Britney Muller</h5>
                      <h5 class="text-500 mb-1">SEO Scientist</h5>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/7.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Casey Coates</h5>
                      <h5 class="text-500 mb-1">Software Engineer</h5>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-4 col-xl-3 mb-5">
                      <img class="img-fluid rounded-circle" src="assets/img/team/8.jpg" width="140" alt="" />
                      <h5 class="mt-3 mb-1">Dana</h5>
                      <h5 class="text-500 mb-1">Bug Hunter</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center pt-4">
                <div class="col">
                  <h2 class="font-weight-medium fs-2 fs-sm-3"> Make Your Story With Us</h2>
                  <p class="lead">Join the talented group of artists &amp; imagineers.</p>
                  <a class="btn btn-primary rounded mt-2 shadow-sm" href="#!">Join Boots4</a>
                </div>
              </div>
            </div>
            end of .container

          </section> -->
          <!-- <section> close ============================-->
          <!-- ============================================-->


          <footer class="page-footer">
            <div class="bg-holder lazy" data-background="assets/img/sidebars/about-min.webp" style="background-position: 0 27%; transform: scale(1.1);">
            </div>
            <!--/.bg-holder-->

            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="row align-items-center">
                  <div class="col-lg-6 text-lg-left">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">
                      Copyright &copy; 2018 Boots4&trade; inc.</p>
                  </div>
                  <div class="col-lg-6 text-lg-right mt-2 mt-lg-0">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Made with<span class="fas fa-heart mx-1"></span>by
                      <a class="text-light" href="https://themewagon.com/">Themewagon</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-sm-relative">
          <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="assets/img/times.svg" width="25" alt="" /><img class="d-lg-none" src="assets/img/times-black.svg" width="18" alt="" /></span>
            <div class="bg-holder lazy" data-background="assets/img/sidebars/about-min.webp" style="">
            </div>
            <!--/.bg-holder-->

            <h1 class="page-title">Gest??o de Risco</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="page position-absolute t-0 w-100" id="gestao-financeira">
      <div class="row no-gutters minh-100vh">
        <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-sm-0">


          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <section class="pt-5 pt-xl-7 pt-xxl-8">

            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="text-center mb-5 mb-lg-6">
                    <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Gest??o </span> Financeira</h2>
                    <hr class="hr-ornate" />
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                      <div class="bg-holder position-relative rounded py-8 py-md-0 lazy" data-background="assets/img/infinity.webp" style="">
                      </div>
                      <!--/.bg-holder-->

                      <div class="position-absolute t-0 l-0 h-100 w-100 d-flex align-items-center justify-content-center">
                        <a class="video-modal text-white" href="https://www.youtube.com/watch?v=p6-WUWmV-fg" data-start="33" data-end="59"><span class="fa-layers fa-fw fs-5"><i class="fas fa-circle"></i><i class="text-primary fas fa-play" data-fa-transform="shrink-12 right-0.5"></i></span></a>
                      </div>
                    </div>
                    <div class="col-md-6 pl-3 pl-md-4">
                      <!-- <h4>To Infinity and Beyond!</h4> -->
                      <!-- <p class="lead my-3">At Boots4, we believe there is a way where customers are earned rather than bought. We're obsessively passionate about it, and our mission is to help you achieve it. </p> -->
                      <p class="text-justify ">
                        O primeiro passo para o crescimento da entidade ?? uma boa gest??o financeira. Tendo em vista que essa atividade objetiva utilizar da melhor maneira poss??vel os recursos dispon??veis. Al??m de fornecer os recursos para an??lise de diversos cen??rios e possibilitar definir metas para que a entidade melhore seus resultados e forma como utiliza seus recursos.
                      </p>
                      <p class="text-justify ">
                        O in??cio da gest??o financeira se d?? pela realiza????o da an??lise financeira. Esse servi??o oferecido pela Brasil Atuarial Consultoria, apura e acompanha a evolu????o dos custos com base no plano de contas padr??o, seguindo as boas pr??ticas de gest??o. A an??lise financeira, al??m de apurar o resultado da opera????o, possibilita melhor entendimento acerca da participa????o de cada centro de custos e, consequentemente, auxilia na forma????o do valor da contribui????o mensal dos planos. Aqui tamb??m incluem a apura????o dos indicadores de desempenho, an??lise de break-even e outras informa????es financeiras relevantes para o neg??cio.
                      </p>
                      <p class="text-justify ">
                      A an??lise financeira e de suma import??ncia para an??lise de liquidez e solv??ncia da entidade.
                      </p>
                      <p class="text-justify ">
                      Veja os principais servi??os que tamb??m fazem parte da gest??o financeira:
                      </p>
                      <ul>
                        <li>Planejamento or??ament??rio: An??lise da situa????o financeira atual para constru????o de or??amento baseado em metodologia de trabalho previamente implantada e metas do planejamento estrat??gico definidas;</li>
                        <li>Estudos de viabilidade: Avalia????o da viabilidade e sustentabilidade de determinada opera????o relacionada diretamente com os servi??os oferecidos pela entidade, tais como: Implanta????o de central de atendimento e Viabilidade de implanta????o ou altera????o da regra de rastreamento;
                        </li>
                        <li>Aliena????o de Carteira: Estudos e avalia????es para a aquisi????o ou a transfer??ncia de carteiras.</li>

                      </ul>
                      <p class="text-justify ">
                      Acreditamos que atrav??s dessas a????es calculadas e estrategicamente desenvolvidas, a entidade poder?? melhorar seus resultados e a forma que usa seus recursos.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of .container-->

          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->




          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <?php /*<section class="bg-light text-center">

            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="mb-5 mb-lg-6">
                    <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Choose </span>Your plan</h2>
                    <hr class="hr-ornate" />
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-xl-0">
                      <div class="rounded border py-6 bg-white">
                        <h4 class="font-weight-regular">Basic</h4>
                        <h2>$0<span class="font-weight-regular fs-0"> / month</span></h2>
                        <ul class="list-unstyled text-dark my-4">
                          <li>15 Projects</li>
                          <li>30 GB Storage</li>
                          <li class="text-muted">Unlimited Data Transfer</li>
                          <li class="text-muted">50 GB Bandwith</li>
                          <li class="text-muted">Enhanced Security</li>
                        </ul>
                        <a class="btn btn-link text-dark" href="#!">Purchase Now<span class="fas fa-chevron-right ml-1"></span></a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-lg-0">
                      <div class="rounded border py-6 bg-white">
                        <h4 class="font-weight-regular text-primary">Business</h4>
                        <h2 class="text-primary">$59<span class="font-weight-regular fs-0"> / month</span></h2>
                        <ul class="list-unstyled text-dark my-4">
                          <li>50 Projects</li>
                          <li>30 GB Storage</li>
                          <li>Unlimited Data Transfer</li>
                          <li class="text-muted">50 GB Bandwith</li>
                          <li class="text-muted">Enhanced Security</li>
                        </ul>
                        <a class="btn btn-primary" href="#!">Free Trial<span class="fas fa-chevron-right ml-1"></span></a>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 mb-4 mb-lg-0">
                      <div class="rounded border py-6 bg-white">
                        <h4 class="font-weight-regular">Advanced</h4>
                        <h2>$99<span class="font-weight-regular fs-0"> / month</span></h2>
                        <ul class="list-unstyled text-dark my-4">
                          <li>Unlimited</li>
                          <li>30 GB Storage</li>
                          <li>Unlimited Data Transfer</li>
                          <li>50 GB Bandwith</li>
                          <li>Enhanced Security</li>
                        </ul>
                        <a class="btn btn-link text-dark" href="#!"> Purchase Now<span class="fas fa-chevron-right ml-1"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of .container-->

          </section> */ ?>
          <!-- <section> close ============================-->
          <!-- ============================================-->




          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <?php /* <section>

            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-md-9 col-xl-8 col-xxl-6 text-center">
                  <div class="mb-5 mb-lg-6">
                    <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Our Valuable </span> Clients</h2>
                    <hr class="hr-ornate" />
                  </div>
                  <div class="row align-items-center">
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/1.png" alt="" style="width: 7.5rem;" />
                    </div>
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/2.png" alt="" style="width: 7.5rem;" />
                    </div>
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/3.png" alt="" style="width: 7.5rem;" />
                    </div>
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/4.png" alt="" style="width: 7.5rem;" />
                    </div>
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/5.png" alt="" style="width: 5rem;" />
                    </div>
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/6.png" alt="" style="width: 5rem;" />
                    </div>
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/7.png" alt="" style="width: 5rem;" />
                    </div>
                    <div class="col-4 col-sm-3 col-lg-3 mb-4">
                      <img class="img-fluid" src="assets/img/logo/8.png" alt="" style="width: 4rem;" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center mt-6">
                <div class="col text-center">
                  <h3 class="mb-2">Start your next project with us</h3>
                  <p class="lead">Email us at
                    <a href="mailto:info@boots4.com">info@boots4.com </a>or call
                    <a href="tel:+44867897354">+44 867897354</a>
                  </p>
                </div>
              </div>
            </div>
            <!-- end of .container-->

          </section> */ ?>
          <!-- <section> close ============================-->
          <!-- ============================================-->


          <footer class="page-footer">
            <div class="bg-holder lazy" data-background="assets/img/sidebars/service-min.webp" style="background-position: 0 41%; transform: scale(1.1);">
            </div>
            <!--/.bg-holder-->

            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="row align-items-center">
                  <div class="col-lg-6 text-lg-left">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">
                      Copyright &copy; 2018 Boots4&trade; inc.</p>
                  </div>
                  <div class="col-lg-6 text-lg-right mt-2 mt-lg-0">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Made with<span class="fas fa-heart mx-1"></span>by
                      <a class="text-light" href="https://themewagon.com/">Themewagon</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-sm-relative">
          <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="assets/img/times.svg" width="25" alt="" /><img class="d-lg-none" src="assets/img/times-black.svg" width="18" alt="" /></span>
            <div class="bg-holder lazy" data-background="assets/img/sidebars/service-min.webp" style="">
            </div>
            <!--/.bg-holder-->

            <h1 class="page-title">Gest??o Financeira</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="page position-absolute t-0 w-100" id="gestao-estrategica">
      <div class="row no-gutters minh-100vh">
        <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-sm-0">


          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <section class=" pt-5 pt-xl-7 pt-xxl-8 " id="boots4-projects">

            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="mb-5 mb-lg-6">
                    <h2 class="fs-2 fs-sm-3 text-center"> <span class="font-weight-medium">Gest??o </span> Estrat??gica</h2>
                    <hr class="hr-ornate" />
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                      <div class="bg-holder position-relative rounded py-8 py-md-0 lazy" data-background="assets/img/infinity.webp" style="">
                      </div>
                      <!--/.bg-holder-->

                      <div class="position-absolute t-0 l-0 h-100 w-100 d-flex align-items-center justify-content-center">
                        <a class="video-modal text-white" href="https://www.youtube.com/watch?v=p6-WUWmV-fg" data-start="33" data-end="59"><span class="fa-layers fa-fw fs-5"><i class="fas fa-circle"></i><i class="text-primary fas fa-play" data-fa-transform="shrink-12 right-0.5"></i></span></a>
                      </div>
                    </div>
                    <div class="col-md-6 pl-3 pl-md-4">
                      <!-- <h4>To Infinity and Beyond!</h4> -->
                      <!-- <p class="lead my-3">At Boots4, we believe there is a way where customers are earned rather than bought. We're obsessively passionate about it, and our mission is to help you achieve it. </p> -->
                      <p class="text-justify ">
                      Uma forma de otimizar processos e tonar mais eficaz a gest??o de um neg??cio, al??m de contribuir para a entidade tomar melhores decis??es, definir metas e obter melhores resultados ?? atrav??s da gest??o estrat??gica.
                      </p>
                      <p class="text-justify ">
                      Neste sentindo, a Brasil Atuarial Consultoria contribui na condu????o do neg??cio seguindo estrat??gias passando principalmente pelas seguintes ??reas:
                      </p>
                      <!-- <p class="text-justify ">
                        A an??lise financeira e de suma import??ncia para an??lise de liquidez e solv??ncia da
                        entidade.
                      </p>
                      <p class="text-justify ">
                        Ainda dentro da gest??o financeira, os seguintes servi??os s??o contemplados:
                      </p> -->
                      <ul>
                        <li>Operacional: Avalia????o dos fluxos e processos;</li>
                        <li>Distribui????o: Avalia????o e reestrutura????o das principais pol??ticas de distribui????o da entidade, tais como: remunera????o, inadimpl??ncia, reten????o e manuten????o dos contratos de ades??o.
                        </li>
                        <li>Produto: tipos e estrutura dos planos, e</li>
                        <li>Precifica????o: Avalia????o da estrutura e metodologia de composi????o de pre??os.</li>

                      </ul>
                      <p class="text-justify ">
                      A gest??o estrat??gia inicia pelo diagn??stico geral, tra??ando um panorama da situa????o atual. Em seguida, s??o elencados os pontos cr??ticos e as propostas de solu????es juntamente com os respectivos gestores. Nesta fase, envolve tamb??m pesquisa de novas ferramentas que podem ser utilizadas, capacita????o de equipe, busca por inova????o, realiza????o de benchmarking para avaliar a concorr??ncia e o mercado.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="row justify-content-center text-center pt-4">
                <div class="col">
                  <h2 class="font-weight-medium fs-2 fs-sm-3"> Start a project with us</h2>
                  <p class="lead">Our telented team always ready to help you</p>
                  <a class="btn btn-primary rounded mt-2 shadow-sm" href="#">Get Started</a>
                </div>
              </div> -->
            </div>
            <!-- end of .container-->

          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->


          <footer class="page-footer">
            <div class="bg-holder lazy" data-background="assets/img/sidebars/portfolio-min.webp" style="background-position: 0 27%; transform: scale(1.1);">
            </div>
            <!--/.bg-holder-->

            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="row align-items-center">
                  <div class="col-lg-6 text-lg-left">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">
                      Copyright &copy; 2018 Boots4&trade; inc.</p>
                  </div>
                  <div class="col-lg-6 text-lg-right mt-2 mt-lg-0">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Made with<span class="fas fa-heart mx-1"></span>by
                      <a class="text-light" href="https://themewagon.com/">Themewagon</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-sm-relative">
          <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="assets/img/times.svg" width="25" alt="" /><img class="d-lg-none" src="assets/img/times-black.svg" width="18" alt="" /></span>
            <div class="bg-holder lazy" data-background="assets/img/sidebars/portfolio-min.webp" style="">
            </div>
            <!--/.bg-holder-->

            <h1 class="page-title">Gest??o Estrat??gica</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="page position-absolute t-0 w-100" id="avaliacao-atuarial">
      <div class="row no-gutters minh-100vh">
        <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-sm-0">


          <!-- ============================================-->
          <!-- <section> begin ============================-->
          <section class="pt-5 pt-xl-7 pt-xxl-8">

            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="text-center mb-5 mb-lg-6">
                    <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Avalia????o </span> Atuarial</h2>
                    <hr class="hr-ornate" />
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                      <div class="bg-holder position-relative rounded py-8 py-md-0 lazy" data-background="assets/img/infinity.webp" style="">
                      </div>
                      <!--/.bg-holder-->

                      <div class="position-absolute t-0 l-0 h-100 w-100 d-flex align-items-center justify-content-center">
                        <a class="video-modal text-white" href="https://www.youtube.com/watch?v=p6-WUWmV-fg" data-start="33" data-end="59"><span class="fa-layers fa-fw fs-5"><i class="fas fa-circle"></i><i class="text-primary fas fa-play" data-fa-transform="shrink-12 right-0.5"></i></span></a>
                      </div>
                    </div>
                    <div class="col-md-6 pl-3 pl-md-4">
                      <!-- <h4>To Infinity and Beyond!</h4> -->
                      <!-- <p class="lead my-3">At Boots4, we believe there is a way where customers are earned rather than bought. We're obsessively passionate about it, and our mission is to help you achieve it. </p> -->
                      <p class="text-justify ">
                      Com uso da matem??tica financeira, teoria das probabilidades e estat??stica para estimar 
                      o acontecimento de determinados eventos e os valores associados a eles, a avalia????o 
                      atuarial ?? considerada uma das principais solu????es oferecidas pela Brasil Atuarial 
                      Consultoria, tendo como objetivo manter o equil??brio atuarial e financeiro da opera????o.</p>
                      <p class="text-justify ">
                      A an??lise atuarial consiste na <strong>an??lise t??cnica-atuarial da carteira</strong>, atrav??s da an??lise de 
                      exposi????o e apura????o de diversos indicadores essenciais para auxiliar na tomada de 
                      decis??es estrat??gicas para obter melhoria cont??nua de resultado operacional e 
                      performance.</p>
                      <p class="text-justify ">
                      Atrav??s deste servi??o ?? poss??vel realizar a <strong>apura????o rateio</strong>, afim de identificar a melhor 
                      metodologia aderente ??s caracter??sticas da base atrav??s de testes de adequa????o, 
                      pesquisa de mercado e simula????es do modelo. Ap??s definida a metodologia, a Brasil 
                      Atuarial oferece todo o suporte t??cnico e operacional na implementa????o do rateio e 
                      acompanhamento mensal.</p>
                      <p class="text-justify ">
                      Com base na apura????o do rateio e em conjunto com a an??lise financeira da entidade ?? 
                      apurado o <strong>valor da contribui????o mensal</strong> do plano para adequa????o dos valores 
                      praticados da carteira.</p>
                      <p class="text-justify ">
                      Ainda, oferecemos uma modelagem de c??lculo para a <strong>constitui????o de reserva</strong> aplicada 
                      ??s entidades de autogest??o. Essa reserva ?? constitu??da previamente para resguardar o 
                      momento que os eventos ocorridos superem as contribui????es mensais.</p>
                      <p class="text-justify ">
                      Importante ressaltar que esses trabalhos podem ser realizados com base na pr??pria 
                      experi??ncia estat??stica da entidade ou na <strong>experi??ncia do mercado</strong>, este ??ltimo ?? 
                      utilizado principalmente para quando a entidade planeja expandir sua ??rea de atua????o.</p>
                      <p class="text-justify ">
                      Em suma, segue os principais trabalhos que s??o considerados dentro da Avalia????o 
                      Atuarial:</p>

                      </p>
                      <!-- <p class="text-justify ">
                        A an??lise financeira e de suma import??ncia para an??lise de liquidez e solv??ncia da
                        entidade.
                      </p>
                      <p class="text-justify ">
                        Ainda dentro da gest??o financeira, os seguintes servi??os s??o contemplados:
                      </p> -->
                      <ul>
                      <li>An??lise Atuarial;</li>
                      <li>Apura????o e implementa????o de rateio;</li>
                      <li>Tabelas de pre??o: precifica????o, com base na pr??pria experi??ncia da entidade ou na 
                      experi??ncia de mercado (tipos de ve??culo, grupo de modelos, regi??o de atua????o e 
                      outras vari??veis);</li>
                      <li>Apura????o de reserva t??cnica;</li>
                      <li>C??lculo do valor da contribui????o mensal;</li>
                      <li>Indicadores mercadol??gicos: relat??rio com detalhamento amplo do mercado de 
                      planos de autogest??o e seguros de Autom??vel, contemplando informa????es 
                      abrangentes relacionadas ?? frota nacional de ve??culos, frota segura, perfil, regi??o, 
                      indicadores sociais regionalizados e reserva de mercado.</li>
                      <li>Nota T??cnica Atuarial: elabora????o de nota t??cnica atuarial para demonstra????o da 
                      viabilidade econ??mico-financeira dos planos e servi??os. Este documento tem por 
                      objetivo descrever as caracter??sticas gerais do plano de benef??cios, a formula????o de 
                      c??lculo do rateio e da reserva t??cnica, bem como as bases t??cnicas e premissas 
                      utilizadas</li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="row justify-content-center mt-4">
                <div class="col-lg-10">
                  <div class="rounded googlemap minh-50vh" data-latlng="48.8583701,2.2922873,17" data-scrollwheel="false" data-icon="assets/img/map-marker.png" data-zoom="17" data-theme="Default">
                    <div class="marker-content py-3">
                      <h5>Eiffel Tower</h5>
                      <p>Gustave Eiffel's iconic, wrought-iron 1889 tower,
                        <br /> with steps and elevators to observation decks.
                      </p>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
            <!-- end of .container-->

          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->


          <footer class="page-footer">
            <div class="bg-holder lazy" data-background="assets/img/sidebars/contact-min.webp" style="background-position: 0 37%; transform: scale(1.1);">
            </div>
            <!--/.bg-holder-->

            <div class="row justify-content-center">
              <div class="col-lg-10">
                <div class="row align-items-center">
                  <div class="col-lg-6 text-lg-left">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">
                      Copyright &copy; 2018 Boots4&trade; inc.</p>
                  </div>
                  <div class="col-lg-6 text-lg-right mt-2 mt-lg-0">
                    <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Made with<span class="fas fa-heart mx-1"></span>by
                      <a class="text-light" href="https://themewagon.com/">Themewagon</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-sm-relative">
          <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="assets/img/times.svg" width="25" alt="" /><img class="d-lg-none" src="assets/img/times-black.svg" width="18" alt="" /></span>
            <div class="bg-holder lazy" data-background="assets/img/sidebars/contact-min.webp" style="">
            </div>
            <!--/.bg-holder-->

            <h1 class="page-title">Avalia????o Atuarial</h1>
          </div>
        </div>
      </div>
    </div>
    


    <div class="page position-absolute t-0 w-100" id="contact">
        <div class="row no-gutters minh-100vh">
          <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-5 pt-xl-7 pt-xxl-8">

              <div class="container-fluid">
                <div class="row justify-content-center">
                  <div class="col-lg-10">
                    <div class="text-center mb-5 mb-lg-6">
                      <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Entre em contato </span></h2>
                      <hr class="hr-ornate" />
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 mb-xl-0">
                        <h4>Fale conosco</h4>
                        <p class="mt-3 mb-0">Estamos ?? disposi????o e motivados para contribuir para uma melhor gest??o financeira, estrat??gica, atuarial e de risco na sua entidade.</p>
                        <div class="row">
                          <div class="col-11">
                            <hr class="my-4" />
                          </div>
                          <div class="col-auto" style="width: auto">
                            <div class="row">
                              <div class="col-1"><span class="fas fa-map-marker-alt text-900"></span></div>
                              <div class="col">
                                <h5 class="mb-1">Avenida Sebasti??o de Brito, 805</h5>
                                <p>Dona Clara - Belo Horizonte/MG</p>
                              </div>
                            </div>
                          </div>
                          
                          <!-- <div class="col-auto" style="min-width: 100%;">
                            <ul class="list-inline">
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-facebook-f"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-twitter"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-linkedin-in"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-youtube"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-google-plus-g"></span></a>
                              </li>
                            </ul>
                          </div> -->
                        </div>
                        <div class="row">
                          
                          
                          <div class="col-auto" style="width: auto">
                            <div class="row">
                              <div class="col-12">
                                <div class="row">
                                  <div class="col-1 mr-3"><span class="fas fa-phone text-900"></span></div>
                                  <div class="col pl-0">
                                    <!-- <a href="tel:112-334-48-55">(31) 2510-8536 / (31) 99279-0202</a> -->
                                    (31) 2510-8536 / (31) 99279-0202
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="row">
                                  <div class="col-1 mr-3"><span class="fas fa-paper-plane text-900"></span></div>
                                  <div class="col pl-0">
                                    <a href="mailto:contato@brasilatuarial.com.br">contato@brasilatuarial.com.br</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-11">
                            <hr class="my-4" />
                          </div>
                          <!-- <div class="col-auto" style="min-width: 100%;">
                            <ul class="list-inline">
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-facebook-f"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-twitter"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-linkedin-in"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-youtube"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-google-plus-g"></span></a>
                              </li>
                            </ul>
                          </div> -->
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 mb-lg-0">
                        <h4>Deixe-nos seus dados</h4>
                        <p>Retornaremos o contato apresentando nossas solu????es em consultoria atuarial.</p>
                        <form class="zform">
                           <!--<input type="hidden" name="to" value="gabriela.guimaraes@brasilatuarial.com.br" /> -->
                          <!--<input type="hidden" name="to" value="marcelo@agenciabrasildigital.com.br" />-->
                          <div class="form-group">
                            <label class="ls text-uppercase mb-0">Nome da Entidade</label>
                            <input class="form-control" type="text" name="empresa" placeholder="" required="required" />
                          </div>
						  <div class="form-group">
                            <label class="ls text-uppercase mb-0">Seu nome</label>
                            <input class="form-control" type="text" name="name" placeholder="" required="required" />
                          </div>
						  
						   <div class="form-group">
                            <label class="ls text-uppercase mb-0">Telefone</label>
                            <input class="form-control phone" type="text" name="telefone" placeholder="" required="required" />
                          </div>
						  <div class="form-group">
                            <label class="ls text-uppercase mb-0">WhatsApp</label>
                            <input class="form-control wpp" type="text" name="whatsapp" placeholder="" />
                          </div>
                          <div class="form-group">
                            <label class="ls text-uppercase mb-0">Seu email</label>
                            <input class="form-control" type="email" name="email" placeholder="" required="required" />
                          </div>
                          <div class="row">
                            <?php foreach ($items as $k=>$i) : ?>
                            <div class="col-md-6 col-sm-6 col-lg-6  col-xs-6 col-xl-6 col-6 data-content="">
                              <div class="form-group form-check">
                                <input type="checkbox" name="benef[]" value="<?= $i->title ?>" class="form-check-input" id="ben<?= $k ?>">
                                <label class="form-check-label" for="ben<?= $k ?>"><?= $i->title ?></label>
                              </div>
                            </div>
                            <?php endforeach; ?>
                          </div>
                          

                          <div class="form-group">
                            <label class="ls text-uppercase mb-0">Sua mensagem</label>
                            <textarea class="form-control" rows="4" name="message" placeholder="" required="required"></textarea>
                          </div>
                          <div class="zform-feedback"></div>
                          <button class="btn btn-block btn-warning mt-4" type="submit">Enviar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!--div class="row justify-content-center mt-4">
                  <div class="col-lg-10">
                    <div class="rounded googlemap minh-50vh" data-latlng="-19.86165927393409, -43.939555792919684,17" data-scrollwheel="false" data-icon="assets/img/map-marker.png" data-zoom="17" data-theme="Default">
                      <div class="marker-content py-3">
                        <h5>Clube Brasil Benef??cios</h5>
                                <p>Avenida Sebasti??o de Brito, 805
                                  <br>Dona Clara - Belo Horizonte/MG</p>
                      </div>
                    </div>
                  </div>
                </div-->
              </div>
              <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


           
          </div>
          <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
            <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="assets/img/times.svg" width="25" alt=""/><img class="d-lg-none" src="assets/img/times-black.svg" width="18" alt=""/></span>
              <div class="bg-holder lazy" data-background="assets/img/sidebars/contact-min.webp" style="">
              </div>
              <!--/.bg-holder-->

              <h1 class="page-title">Fale conosco</h1>
            </div>
          </div>
        </div>
      </div>
  </main>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/lib/prismjs/prism.js"></script>
  <script src="assets/lib/loaders.css/loaders.css.js"></script>
  <script src="assets/js/stickyfill.min.js"></script>
  <script src="assets/lib/remodal/remodal.js"></script>
  <script src="assets/lib/jtap/jquery.tap.js"></script>
  <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
  <script src="assets/lib/owl.carousel/owl.carousel.js"></script>
  <script src="assets/lib/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/lib/isotope-packery/packery-mode.pkgd.min.js"></script>
  <script src="assets/lib/lightbox2/js/lightbox.js"></script>
  <script src="assets/lib/semantic-ui-accordion/accordion.min.js"></script>
  <script src="assets/lib/semantic-ui-transition/transition.min.js"></script>
  <script src="assets/lib/prismjs/prism.js"></script>
  <script src="assets/js/stickyfill.min.js"></script>
  <script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
  <script src="assets/js/theme.js"></script>
  <script src="assets/js/jquery.mask.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap" async></script> -->
  <script>

    $(document).ready(function() {
      
      setTimeout(() => {
        $.each($("link[rel=preload]"), function(a,b) {
          // console.log(a)
          console.log(b)
          $(b)
          .attr("href", $(b).data("href"))
          .attr("rel", "stylesheet")
        })
        // $("link[rel=preload]")
        // .attr("href", $("link[rel=preload]").data("href"))
        // .attr("rel", "stylesheet")
      }, 500);
      // console.log($("link[rel=preload]"))
    })

    document.addEventListener("DOMContentLoaded", function() {
      var lazyBgImages = [].slice.call(document.querySelectorAll("div.lazy"));

      if ("IntersectionObserver" in window) {
        let lazyBgImageObserver = new IntersectionObserver(function(entries, observer) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              let lazyBgImage = entry.target;

              lazyBgImage.style.backgroundImage = "url('"+lazyBgImage.dataset.background+"')";
              lazyBgImage.src = lazyBgImage.dataset.background
              // lazyBgImage.src = lazyBgImage.dataset.src;
              // lazyBgImage.srcset = lazyBgImage.dataset.srcset;
              lazyBgImage.classList.remove("lazy");
              lazyBgImageObserver.unobserve(lazyBgImage);
            }
          });
        });

        lazyBgImages.forEach(function(lazyBgImage) {
          console.log("loaded")
          lazyBgImageObserver.observe(lazyBgImage);
        });
      } else {
        // Possibly fall back to event handlers here
      }
    });
    document.addEventListener("DOMContentLoaded", function() {
      var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

      if ("IntersectionObserver" in window) {
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              let lazyImage = entry.target;
              lazyImage.src = lazyImage.dataset.src;
              lazyImage.srcset = lazyImage.dataset.srcset;
              lazyImage.classList.remove("lazy");
              lazyImageObserver.unobserve(lazyImage);
            }
          });
        });

        lazyImages.forEach(function(lazyImage) {
          lazyImageObserver.observe(lazyImage);
        });
      } else {
        // Possibly fall back to event handlers here
      }
    });
    /* 1. Proloder */
    $(window).on('load', function () {
      setTimeout(() => {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
          'overflow': 'visible'
        });  
      }, 550);
      
    });
    var SPMaskBehavior = function(val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
      };


    $('.wpp').mask(SPMaskBehavior, spOptions);
    $('.phone').mask('(00) 0000-0000');
  </script>
</body>

</html>






<?php
function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
} ?>