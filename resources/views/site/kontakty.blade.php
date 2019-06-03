@extends('layouts.app')


@section('content')
<section>
      <div id="map-container" class="map-container-section mb-4" style="height: 500px; margin-top: 65px;">

        <script>
          var map;
          DG.then(function () {
            map = DG.map('map-container', {
              center: [48.802402, 44.767887],
              zoom: 18
            });

            DG.marker([48.802402, 44.7678879]).addTo(map).bindPopup('РТИ-Трейдинг');
          });
        </script>
      </div>
    </section>

  </header>

  <main>
    <div class="container-fluid mt-5 mt-md-0 mb-5">

      <!-- Grid row -->
      <div class="row" style="margin-top: -100px;">

        <!-- Grid column -->
        <div class="col-md-12 px-lg-5">

          <!-- Card -->
          <div class="card pb-5 mx-md-3">

            <div class="card-body">

              <div class="container">
                <!-- Section: Contact v.2 -->
                <section class="text-center">

                  <!-- Section heading -->
                  <h2 class="font-weight-bold title h1 my-5">Наши контакты</h2>
                  <!-- Section description -->
                  <div class="row pt-2 mb-5 text-left d-flex justify-content-between">
                    <div class="col-md-4 mp-4">
                      <div class="d-flex flex-column">
                        <div class="p-2"><i class="fas fa-map-marked-alt fa-fw fa-2x blue-text"></i> Горького, 102а
                          2 этаж
                          Волжский, Волгоградская область, 404130</div>
                      </div>
                    </div>
                    <div class="col-md-4 mp-4">
                      <div class="d-flex flex-column">
                        <div class="p-2"><i class="fas fa-clock  fa-2x blue-text"></i> Понедельник - Пятница: 08:00 -
                          17:00</div>
                        <div class="p-2"><i class="fas fa-clock  fa-2x blue-text"></i> Суббота - Воскресенье: Выходной
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mp-2">
                      <div class="d-flex flex-column">
                        <div class="p-2">
                          <div class="p-2"><i class="fas fa-phone-square fa-fw fa-2x blue-text"></i>  +7 (8443) 31–05–75</div>
                          <div class="p-2"><i class="fas fa-phone-square fa-fw fa-2x blue-text"></i>  +7 (8443) 31–13–31</div>
                          <div class="p-2"><i class="fas fa-envelope fa-fw fa-2x blue-text"></i>  info@rti34.ru</div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <h3 class="font-weight-bold title mt-5 mb-4">Юридическая информация и реквизиты</h3>
                  <div class="row pt-2 mb-5 text-left">
                    <div class="col-md-5 mp-4">
                      <div class="d-flex flex-column">
                        <div class="p-2"><i class="far fa-file-alt fa-fw fa-lg"></i> Flex item 1</div>
                        <div class="p-2"><i class="far fa-file-alt fa-fw fa-lg"></i> Flex item 2</div>
                        <div class="p-2"><i class="far fa-file-alt fa-fw fa-lg"></i> Flex item 3</div>
                      </div>
                    </div>
                    <div class="col-md-4 mp-4">
                      <div class="d-flex flex-column">
                        <div class="p-2"><i class="far fa-file-alt fa-fw fa-lg"></i> Flex item 1</div>
                        <div class="p-2"><i class="far fa-file-alt fa-fw fa-lg"></i> Flex item 2</div>
                        <div class="p-2"><i class="far fa-file-alt fa-fw fa-lg"></i> Flex item 3</div>
                      </div>
                    </div>
                    <div class="col-md-3 mp-2">
                      <div class="d-flex flex-column text-center">
                        <div class="p-2">
                          <a href="">
                            <i class="far fa-file-alt fa-fw fa-6x"></i>
                            <p class="pt-3">Скачать карту партнера</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>

                  <div class="row pt-2 mt-5">
                    <div class="col-lg-12  col-md-12 wow fadeIn" data-wow-delay="0.4s">
                      <!-- Secion heading -->
                      <!--Header-->
                      <div class="form-header blue-gradient accent-1" style="margin-top: 0;margin-bottom: 0;">
                        <h3><i class="fas fa-envelope"></i> Если у Вас остались вопросы, напишите нам
                        </h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-12 ">

                      <!--Form with header-->

                      <br>

                      <!--Body-->
                      <div class="md-form">
                        <input type="text" id="form-name" class="form-control">
                        <label for="form-name">Как к Вам обращаться*</label>
                      </div>

                      <div class="md-form">
                        <input type="text" id="form-email" class="form-control">
                        <label for="form-email">Ваш контактный емейл*</label>
                      </div>

                      <div class="md-form">
                        <input type="text" id="form-phone" class="form-control">
                        <label for="form-email">Ваш контактный телефон*</label>
                      </div>

                      <div class="md-form">
                          <input type="text" id="form-organization" class="form-control">
                          <label for="form-email">Из какой организации вы обращаетесь*</label>
                        </div>

                      <div class="md-form">
                        <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                        <label for="form-text">Ваше сообщение*</label>
                      </div>

                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Согласен с <a
                            href="politics.html">политикой конфиденциальности*</a></label>
                      </div>

                      <div class="text-center mt-4">
                        <button class="btn btn-light-blue-gradient" id="send_order">Отправить
                          письмо</button>
                      </div>




                      <!--Form with header-->

                    </div>
                    <!--Grid column-->
                  </div>

                </section>
                <!-- Section: Contact v.2 -->

              </div>

            </div>
            <!-- Card -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>

    </div>
  </main>
@endsection