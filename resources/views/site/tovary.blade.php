@extends('layouts.app')


@section('content')
<section>
            <div>
                <img src="img/backgrounds/page_bg1.jpg" style="width: 100%">
            </div>
        </section>

    </header>

    <main>
        <div class="container-fluid mt-5 mt-md-0 mb-5">
            <div class="row" style="margin-top: -100px;">
                <!-- Grid column -->
                <div class="col-md-3">

                    <!-- Card -->
                    <div class="card pb-5 mx-md-3">

                        <div class="card-body">


                            <h3 class="title font-weight-bold text-center wow fadeIn" data-wow-delay="0.2s">
                                Каталог продукции
                            </h3>

                            <nav class="nav flex-column md-pills pills-unique  py-4">
                                <a class="nav-link active blue-gradient" href="#">Рукав с нитяной навивкой ГОСТ
                                    10362-76</a>
                                <a class="nav-link" href="#">Рукав для газовой сварки ГОСТ 9356-75</a>
                                <a class="nav-link" href="#">Рукав напорно-всасывающий ТУ 2552-104-05800952-94</a>
                                <a class="nav-link" href="#">Рукав дюритовый прокладочной конструкции ТУ 0056016-87</a>
                            </nav>


                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->
                <!-- Grid row -->


                <!-- Grid column -->
                <div class="col-md-9">

                    <!-- Card -->
                    <div class="card pb-5 mx-md-3">

                        <div class="card-body">

                            <div class="container">


                                <div class="container">

                                    <!-- Section: About 1 -->
                                    <section id="about" class="wow fadeIn" data-wow-delay="0.2s">

                                        <!-- Grid row -->
                                        <div class="row pt-2 mt-5">

                                            <!-- Grid column -->
                                            <div class="col-lg-5 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">
                                                <!-- Image -->
                                                <img src="img/customers/4644337153610413_4368.jpg"
                                                    class="img-fluid z-depth-1 rounded" alt="My photo">
                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-6 col-md-12 wow fadeIn" data-wow-delay="0.4s">

                                                <!-- Secion heading -->
                                                <h3 class="mb-5  title font-weight-bold wow fadeIn"
                                                    data-wow-delay="0.2s">
                                                    <strong>Пример товара</strong>
                                                </h3>

                                                <!-- Description -->
                                                <p align="justify" class="">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Voluptatibus sequi minima porro molestiae sit debitis iure
                                                    eligendi, inventore quidem sed? Et consectetur eaque, omnis
                                                    eligendi rem incidunt aliquid libero beatae.
                                                </p>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->



                                        <hr>

                                        <div class="row pt-2 ">
                                            <div class="col-lg-12 ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">
                                                <!-- Secion heading -->
                                                <h3 class="title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                                                    <strong>Пример условного обозначения</strong>
                                                </h3>

                                                <!-- Description -->
                                                <p align="justify" class="">
                                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Voluptatibus sequi minima porro molestiae sit debitis iure
                                                    eligendi, inventore quidem sed? Et consectetur eaque, omnis
                                                    eligendi rem incidunt aliquid libero beatae.
                                                </p>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row pt-2 mb-5">
                                            <div class="col-lg-12 ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">
                                                <!-- Secion heading -->
                                                <h3 class="title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                                                    <strong>Технические характеристики</strong>
                                                </h3>

                                                <!-- Description -->
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td colspan="2">Larry the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </section>
                                    <!-- Section: About 1 -->

                                    <hr>

                                    <div class="row pt-2 ">
                                        <div class="col-lg-12  col-md-12 wow fadeIn" data-wow-delay="0.4s">
                                            <!-- Secion heading -->
                                            <!--Header-->
                                            <div class="form-header blue-gradient accent-1">
                                                <h3><i class="fas fa-envelope"></i> Приглашаем к сотрудничеству, ждем
                                                    запрос цены от Вас
                                                </h3>
                                            </div>
                                            <h3 class="title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                                                <strong>Список допусков (кликните, чтобы добавить к запросу
                                                    цены)</strong>
                                            </h3>

                                            <div class="d-flex align-content-start flex-wrap">
                                                <!-- Description -->
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
                                                <button data-type="order_button" data-order-value="Вариант товара"
                                                    type="button" class="btn blue-gradient btn-sm">Вариант
                                                    товара</button>
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
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <input type="text" id="form-name" class="form-control">
                                                <label for="form-name">Как к Вам обращаться*</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                <input type="text" id="form-email" class="form-control">
                                                <label for="form-email">Ваш контактный емейл*</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                <input type="text" id="form-phone" class="form-control">
                                                <label for="form-email">Ваш контактный телефон*</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fas fa-pencil-alt prefix grey-text"></i>
                                                <textarea id="form-text" class="form-control md-textarea"
                                                    rows="3"></textarea>
                                                <label for="form-text">Комментарий</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                                <label class="form-check-label" for="materialUnchecked">Согласен с <a
                                                        href="politics.html">политикой конфиденциальности</a></label>
                                            </div>

                                            <div class="text-center mt-4">
                                                <button class="btn btn-light-blue-gradient" id="send_order">Отправить
                                                    письмо</button>
                                            </div>




                                            <!--Form with header-->

                                        </div>
                                        <!--Grid column-->
                                    </div>

                                </div>


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

    <!-- Footer -->
    <footer class="page-footer font-small blue-gradient pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">РТИ-Трейдинг</h6>
                    <p>Компания РТИ-Трейдинг является официальным представителем ОАО ВАТИ. Продажа резинотехнических
                        изделий.
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
                        <a href="tovary.html">Продукция</a>
                    </p>
                    <p>
                        <a href="kontakty.html">Контакты</a>
                    </p>
                    <p>
                        <a href="o-kompanii.html">Доставка</a>
                    </p>
                    <p>
                        <a href="politics.html">Политика конфиденциальности</a>
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


@endsection
