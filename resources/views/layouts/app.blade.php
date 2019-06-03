<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>РТИ Трейдинг - @yield('title')</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <style>
    li {
      font-size: 0.95rem;
      line-height: 1.7rem;
    }
  </style>

  <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>
</head>

    <body class="light-blue-skin" id="app">

<!-- Start your project here-->
<header>
  <!--Navbar-->

  <!-- <nav class="navbar navbar-expand-lg navbar-dark blue-gradient sticky-top"> -->
  <nav class="navbar navbar-expand-lg navbar-dark blue-gradient fixed-top scrolling-navbar">
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#">
        <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="mdb logo">
      </a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Social Icon  -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link">
              <i class="fas fa-phone-square title"></i> +7 (8443) 31–05–75
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <i class="fas fa-envelope title"></i> info@rti34.ru
            </a>
          </li>
        </ul>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tovary">Продукция</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kontakty">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/o-kompanii">О компании</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/staty">Статьи</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dostavka">Доставка</a>
          </li>

        </ul>
        <!-- Links -->

      </div>
      <!-- Collapsible content -->
    </div>
  </nav>

  <!--/.Navbar-->

        
            @yield('content')
        
    
<!-- Footer -->
<footer class="page-footer font-small blue-gradient pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">РТИ-Трейдинг</h6>
      <p>Компания РТИ-Трейдинг является официальным представителем ОАО ВАТИ. Продажа резинотехнических изделий.
        Наличный и безналичный расчет.</p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Продукция</h6>
      <p>
        <a href="#!">Продукция</a>
      </p>
      <p>
        <a href="#!">Продукция</a>
      </p>
      <p>
        <a href="#!">Продукция</a>
      </p>
      <p>
        <a href="#!">Продукция</a>
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Полезные ссылки</h6>
      <p>
        <a href="tovary">Продукция</a>
      </p>
      <p>
        <a href="kontakty">Контакты</a>
      </p>
      <p>
        <a href="o-kompanii">Доставка</a>
      </p>
      <p>
        <a href="politics">Политика конфиденциальности</a>
      </p>
    </div>

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Контакты</h6>
      <p>
        <i class="fas fa-home mr-3"></i> Горького, 102а
        Волжский, Волгоградская область</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> info@rti34.ru</p>
      <p>
        <i class="fas fa-phone mr-3"></i> +7 (8443) 31–05–75</p>
      <p>
        <i class="fas fa-print mr-3"></i> +7 (8443) 31–13–31</p>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <p class="text-center text-md-left">© 2019:
        <a href="/">
          <strong> РТИ-Трейдинг</strong>
        </a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0">

      <!-- Social buttons -->
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-google-plus-g"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-sm rgba-white-slight mx-1">
              <i class="fab fa-vk"></i>
            </a>
          </li>
        </ul>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>
<!-- Footer -->
      <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('button[data-type="order_button"]').on('click', function (event) {
                event.preventDefault();

                if ($(this).hasClass('blue-gradient')) {
                    $(this).removeClass('blue-gradient');
                    $(this).addClass('btn-deep-orange');
                } else {
                    $(this).removeClass('btn-deep-orange');
                    $(this).addClass('blue-gradient');
                }
            });
        });
    </script>
</body>
</html>
