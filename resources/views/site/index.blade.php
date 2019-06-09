@extends('layouts.app')

@section('title')
    Главная
@endsection

@section('metakeywords')
    РТИ Трейдинг, Резино технические изделия в волжском, РТИ в волжском, Продукция РТИ.
@endsection

@section('metadescription')
    РТИ Трейдинг - Лидер в области поставок резино-технических изделий в Волгоградской области, Волжском и Волгограде.
@endsection


@section('content')

<style>
    /* Necessary for full page carousel*/
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (min-width: 451px) and (max-width: 740px) {

      html,
      body,
      header,
      .view {
        height: 500px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .view {
        height: 550px;
      }
    }

    /* Carousel*/
    .carousel,
    .carousel-item,
    .carousel-item.active {
      height: 100%;
    }

    .carousel-inner {
      height: 100%;
    }

    .carousel-item:nth-child(1) {
      background-image: url("img/slider/slider_1.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(2) {
      background-image: url("img/slider/slider_2.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(3) {
      background-image: url("img/slider/slider_3.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
  </style>
<!-- Carousel Wrapper -->
<div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000"
      data-pause="false">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-3" data-slide-to="2"></li>
      </ol>
      <!-- Indicators -->

      <!-- Slides -->
      <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item active">
          <!-- Mask -->
          <div class="view">
            <div
              class="h-100 d-flex justify-content-center align-items-center mask rgba-black-light white-text text-center">
              <ul class="list-unstyled animated fadeInUp col-md-12">
                <li>
                  <h1 class="display-4 font-weight-bold wow fadeIn" data-wow-delay="0.3s">Резинотехнические изделия</h1>
                  <hr class="hr-light wow fadeIn w-50" data-wow-delay="0.3s">
                </li>
                <li>
                  <h3 class="my-4 wow fadeIn" data-wow-delay="0.3s">В наличии и под заказ</h3>
                </li>
                <li>
                  <a href="/tovary" class="btn btn-white btn-rounded btn-lg deep-orange-text font-weight-bold ml-lg-0 wow fadeIn"
                    data-wow-delay="0.3s"><i class="fas fa-play-circle deep-orange-text mr-2" aria-hidden="true"></i>
                    Перейти к просмотру</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mask -->
        </div>
        <!-- First slide -->

        <!-- Second slide -->
        <div class="carousel-item">
          <!-- Mask -->
          <div class="view">
            <div class="h-100 d-flex justify-content-center align-items-center white-text text-center">
              <ul class="list-unstyled animated fadeInUp col-md-12">
                <li>
                  <h1 class="display-4 font-weight-bold">Доставка со склада поставщика</h1>
                </li>
                <li>
                  <h3 class="my-4">Узнать о доставке</h3>
                </li>
                <li>
                  <a href="dostavka.html" class="btn btn-white btn-rounded btn-lg deep-orange-text font-weight-bold ml-lg-0 wow fadeIn"
                    data-wow-delay="0.3s"><i class="fas fa-play-circle deep-orange-text mr-2" aria-hidden="true"></i>
                    Подробности</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mask -->
        </div>
        <!-- Second slide -->

        <!-- Third slide -->
        <div class="carousel-item">
          <!-- Mask -->
          <div class="view">
            <div
              class="h-100 d-flex justify-content-center align-items-center mask rgba-black-light white-text text-center">
              <ul class="list-unstyled animated fadeInUp col-md-12">
                <li>
                  <h1 class="display-4 font-weight-bold">Полезная информация о продукции</h1>
                </li>
                <li>
                  <h3 class="my-4">Статьи и новости о компании и товарах</h3>
                </li>
                <li>
                  <a href="/staty" class="btn btn-white btn-rounded btn-lg deep-orange-text font-weight-bold ml-lg-0 wow fadeIn"
                    data-wow-delay="0.3s"><i class="fas fa-play-circle deep-orange-text mr-2"
                      aria-hidden="true"></i>Перейти к чтению</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mask -->
        </div>
        <!-- Third slide -->

      </div>
      <!-- Slides -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!-- Controls -->
    </div>
    <!-- Carousel Wrapper -->
  </header>

  <main>
    <div class="container">
      <!-- Section: Features v.4 -->
      <section id="features" class="text-center my-5">

        <!-- Section heading -->
        <h2 class="title font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s">
          <strong>Почему вы захотите приобрести продукцию РТИ у нас</strong>
        </h2>

        <!-- Section description -->
        <p class=" w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
          Специалисты нашей компании готовы предложить Вам лучшее качество за демократичные деньги. Кроме вы захотите с
          нами работать, потому что:</p>

        <!-- Grid row -->
        <div class="row wow fadeIn" data-wow-delay="0.2s">

          <!-- Grid column -->
          <div class="col-lg-4 text-center">
            <div class="icon-area">
              <div class="circle-icon">
                <i class="fas fa-cogs blue-text"></i>
              </div>
              <br>
              <h5 class="dark- font-weight-bold mt-2">Большой выбор качественной продукции</h5>
              <div class="mt-1">
                <p class="mx-3 ">Мы сотрудничаем с самыми известными поставщиками, а это означает, что Вы не будете
                  переживать за качество приобретенной у нас продукии. Кроме того, мы владеем всем ассортиментом, просто
                  позвоните или напишите нам, и мы обязательно подберем для вас лучшее предложение. </p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 text-center">
            <div class="icon-area">
              <div class="circle-icon">
                <i class="fas fa-book blue-text"></i>
              </div>
              <br>
              <h5 class="dark- font-weight-bold mt-2">С нами легко и продуктивно работать</h5>
              <div class="mt-1">
                <p class="mx-3 ">Клиенториентированность - наш основной подход в бизнесе. Мы готовы обсуждать с Вами
                  любые условия поставок. Звоните, обязательно договоримся.</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 text-center mb-4">
            <div class="icon-area">
              <div class="circle-icon">
                <i class="fas fa-users blue-text"></i>
              </div>
              <br>
              <h5 class="dark- font-weight-bold mt-2">Строгий и деловой подход на всех этапах обслуживания</h5>
              <div class="mt-1">
                <p class="mx-3 ">Мы готовы сопровождать сделку с Вами на всех этапах, начиная от оформления заявки и до
                  получения Вами заказанной продукции.</p>
              </div>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.4 -->

      <hr>

      <!-- section product catalog -->
      <section id="product_catalog" class="text-center my-5">
        <!-- Section heading -->
        <h2 class="title font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s">
          <strong>Каталог продукции</strong>
        </h2>

        <!-- Section description -->
        <p class=" w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
          Просто позвоните или напишите нам и мы приступим к обсуждению сделки.</p>

        <div class="row">
          @foreach($products as $k=>$product)
          <div class="col-md-4 wow fadeIn" data-wow-delay="0.2s">
            <!-- Card -->
            <div class="card">

              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="{{ asset('/storage/' .$product->image)}}" alt="{{$product->name}}">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!-- Button -->
              <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3" href="{{ route('tovary', $product->slug) }}"><i
                  class="fas fa-chevron-right pl-1"></i></a>

              <!-- Card content -->
              <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">{{$product->name}}</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">{!!str_limit($product->description, $limit = 100, $end = '...') !!}</p>

              </div>
            </div>
            <!-- Card -->
          </div>
          @endforeach
        </div>
      </section>
      <!-- section product catalog -->

      <hr>

      <!-- section contact us and news -->
      <section id="contact_and_other_catalog" class="text-center my-5">
        <!-- Section heading -->
        <h2 class="title font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s">
          <strong>Свяжитесь с нами</strong>
        </h2>

        <!-- Section description -->
        <p class=" w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
          Просто позвоните или напишите нам и мы приступим к обсуждению сделки.</p>
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-5 mb-4 wow fadeIn" data-wow-delay="0.2s">

            <!--Form with header-->
            <div class="card">

              <div class="card-body">
                <!--Header-->
                <div class="form-header blue-gradient accent-1">
                  <h3><i class="fas fa-envelope"></i> Отправьте Ваше сообщение:</h3>
                </div>

                <p>И в ближайшее время мы Вам ответим</p>

                <!--Body-->
                <div class="md-form">
                  <input type="text" id="form-name" class="form-control">
                  <label for="form-name">Как к Вам обращаться</label>
                </div>

                <div class="md-form">
                  <input type="text" id="form-email" class="form-control">
                  <label for="form-email">Ваш контактный емейл</label>
                </div>

                <div class="md-form">
                  <input type="text" id="form-subject" class="form-control">
                  <label for="form-Subject">Тема письма</label>
                </div>

                <div class="md-form">
                  <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                  <label for="form-text">Сообщение</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="materialUnchecked">
                    <label class="form-check-label" for="materialUnchecked">Согласен с <a href="politics.html">политикой конфиденциальности</a></label>
                </div>

                <div class="text-center mt-4">
                  <button class="btn btn-light-blue-gradient" id="send_email_main">Отправить письмо</button>
                </div>

                <div class="alert alert-danger print-error-msg" style="display:none">
                  <ul></ul>
                </div>

              </div>

            </div>
            <!--Form with header-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-7">

            <!--Google map-->
            <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                <a class="dg-widget-link" href="http://2gis.ru/volgograd/firm/70000001025017449/center/44.76797819137574,48.802553013298294/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Волгограда</a><div class="dg-widget-link"><a href="http://2gis.ru/volgograd/firm/70000001025017449/photos/70000001025017449/center/44.76797819137574,48.802553013298294/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/volgograd/center/44.767984,48.802302/zoom/16/routeTab/rsType/bus/to/44.767984,48.802302╎РТИ-Трейдинг, компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до РТИ-Трейдинг, компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":48.802553013298294,"lon":44.76797819137574,"zoom":16},"opt":{"city":"volgograd"},"org":[{"id":"70000001025017449"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
            </div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
              <div class="col-md-4">
                <a class="btn-floating blue-gradient accent-1"><i class="fas fa-phone"></i></a>
                <p><strong>+7 (8443) 31–05–75</strong></p>
              </div>

              <div class="col-md-4">
                <a class="btn-floating blue-gradient accent-1"><i class="fas fa-phone"></i></a>
                <p><strong>+7 (8443) 31–13–31</strong></p>
              </div>

              <div class="col-md-4">
                <a class="btn-floating blue-gradient accent-1"><i class="fas fa-envelope"></i></a>
                <p><strong>info@rti34.ru</strong></p>
              </div>
            </div>

          </div>
          <!--Grid column-->
        </div>
      </section>
      <!-- section contact us and news -->

      <hr>

    </div>
  </main>
@endsection
