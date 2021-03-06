<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="keywords" content="@yield('metakeywords')" />
  <meta name="description" content="@yield('metadescription')"  />
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <a class="navbar-brand" href="/">
        <img src="/img/logo.png" height="30" alt="mdb logo">
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
              <i class="fas fa-phone-square title"></i> +7 (905) 433-35-85
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <i class="fas fa-phone-square title"></i> +7 (905) 746-23-55
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
          <li class="nav-item">
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

        </ul>
        <!-- Links -->

      </div>
      <!-- Collapsible content -->
    </div>
  </nav>

  <!--/.Navbar-->

        
            @yield('content')
        
    
<!-- Footer -->
<footer class="page-footer font-small blue-gradient pt-4" id="stickyStopper">

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
      
        function isMobile() {
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                  return true; 
            }
            return false;
        }

        $(document).ready(function () {
          new WOW().init();

//            if(isMobile() === false) {
//   $(".sticky").sticky({
//     topSpacing: 90,
//     zIndex: 2,
//     stopper: "#stickyStopper"
//   });
// } 
        
        // MDB Lightbox Init
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
  

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

            $('#send_email_main').on('click', function(e){
              e.preventDefault();
                
                let dataName = $('#form-name').val(); 
                let dataEmail = $('#form-email').val(); 
                let dataSubject = $('#form-subject').val();
                let dataText = $('#form-text').val();
                let dataPolitics = $('input#materialUnchecked').is(':checked');

                data = {}
                data.dataName = dataName
                data.dataEmail = dataEmail
                data.dataSubject = dataSubject
                data.dataText = dataText
                data.dataPolitics = dataPolitics

                // let jsonData = JSON.stringify(data);
                
                $.ajax({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '/send-request',
                    data: {
                      dataName:dataName,
                      dataEmail:dataEmail,
                      dataSubject:dataSubject,
                      dataText:dataText,
                      dataPolitics:dataPolitics,
                    }, 
                    success: function(data) {
                        if($.isEmptyObject(data.error)){
                          alert(data.success);
                          $('#form-name').val(''); 
                          $('#form-email').val(''); 
                          $('#form-subject').val('');
                          $('#form-text').val('');

                          $(".print-error-msg").find("ul").html('');
                          $(".print-error-msg").css('display','none');
                        }else{
                          printErrorMsg(data.error);
                        }
                    }
                });

                function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display','block');
                  $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                  });
                }
            })

            $('#send_request_contacts').on('click', function(e){
              e.preventDefault();
                
                let dataName = $('#form-name').val(); 
                let dataEmail = $('#form-email').val(); 
                let dataPhone = $('#form-phone').val();
                let dataOrganization = $('#form-organization').val();
                let dataText = $('#form-text').val();
                let dataPolitics = $('input#materialUnchecked').is(':checked');

                // data = {}
                // data.dataName = dataName
                // data.dataEmail = dataEmail
                // data.dataPhone = dataPhone
                // data.dataText = dataText
                // data.dataPolitics = dataPolitics

                // let jsonData = JSON.stringify(data);
                
                $.ajax({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '/send-request-contacts',
                    data: {
                      dataName:dataName,
                      dataEmail:dataEmail,
                      dataPhone:dataPhone,
                      dataOrganization:dataOrganization,
                      dataText:dataText,
                      dataPolitics:dataPolitics,
                    }, 
                    success: function(data) {
                        if($.isEmptyObject(data.error)){
                          alert(data.success);
                          $('#form-name').val(); 
                          $('#form-email').val(''); 
                          $('#form-phone').val('');
                          $('#form-organization').val('');
                          $('#form-text').val('');
                          $(".print-error-msg").find("ul").html('');
                          $(".print-error-msg").css('display','none');
                        }else{
                          printErrorMsg(data.error);
                        }
                    }
                });

                function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display','block');
                  $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                  });
                }
            })

            $('#send_order').on('click', function (e) {
                e.preventDefault();
                
                let dataName = $('#form-name').val(); 
                let dataEmail = $('#form-email').val(); 
                let dataPhone = $('#form-phone').val();
                let dataText = $('#form-text').val();
                let dataPolitics = $('input#materialUnchecked').is(':checked');
                let link = document.URL;

                let orderString = "";
                $('button.btn-deep-orange[data-order-value]').each(function(){
                  if(orderString = "") {
                    orderString = $(this).attr('data-order-value');  
                  } else {
                    orderString = orderString + ", " + $(this).attr('data-order-value');  
                  }
                    
                });

                data = {}
                data.dataName = dataName
                data.dataEmail = dataEmail
                data.dataPhone = dataPhone
                data.dataText = dataText
                data.dataPolitics = dataPolitics
                data.orderString = orderString
                data.link = link

                // let jsonData = JSON.stringify(data);
                
                $.ajax({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: '/send-order',
                    data: {
                      dataName:dataName,
                      dataEmail:dataEmail,
                      dataPhone:dataPhone,
                      dataText:dataText,
                      dataPolitics:dataPolitics,
                      orderString:orderString,
                      link:link
                    }, 
                    success: function(data) {
                        if($.isEmptyObject(data.error)){
                          alert(data.success);
                          $('#form-name').val(''); 
                          $('#form-email').val(''); 
                          $('#form-phone').val('');
                          $('#form-text').val('');

                          $(".print-error-msg").find("ul").html('');
                          $(".print-error-msg").css('display','none');

                          
                        }else{
                          printErrorMsg(data.error);
                        }
                    }
                });

                function printErrorMsg(msg) {
                  $(".print-error-msg").find("ul").html('');
                  $(".print-error-msg").css('display','block');
                  $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                  });
                }
            });
        });
    </script>
</body>
</html>
