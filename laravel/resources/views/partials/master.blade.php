<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-D6EDFKMY6P"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-D6EDFKMY6P');
  </script>  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dentro do Código </title>
  <meta content="" name="Dentro do Código - Consultoria em Tecnologia da Informação">
  <meta content="" name="keywords">
  <link href="{{ asset('frontpage/assets/img/icone.png') }}" rel="icon">
  <link href="{{ asset('frontpage/assets/img/icone.png') }}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('frontpage/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontpage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontpage/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('frontpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('frontpage/assets/css/style.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
  @livewireStyles
</head>

<body>
  @include('partials.menu')

  <main id="main">
  @yield('conteudo')
  </main><!-- End #main -->

  @include('partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('frontpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontpage/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontpage/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontpage/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontpage/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('frontpage/assets/vendor/php-email-form/validate.js') }}"></script>

  <script src="{{ asset('frontpage/assets/js/main.js') }}"></script>
  @livewireScripts
</body>
</html>
