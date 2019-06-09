@extends('layouts.app')

@section('title')
    Товары - {{$single_product->name}}
@endsection

@section('metakeywords')
    {{$single_product->metakeywords}}
@endsection

@section('metadescription')
    {{$single_product->metadescription}}
@endsection

@section('content')
    <section>
            <div>
                <img src="/img/backgrounds/page_bg1.jpg" style="width: 100%">
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
                                @foreach($products as $k=>$product)
                                <a class="nav-link active {{ Request::path() === '/tovary/$product->slug' ? 'btn-deep-orange' : 'blue-gradient' }}" href="{{ route('tovary', $product->slug) }}">{{$product->name}}</a>
                                @endforeach
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
                                                <img src="{{ asset('/storage/' .$single_product->image)}}"
                                                    class="img-fluid z-depth-1 rounded" alt="{{$single_product->name}}">
                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-6 col-md-12 wow fadeIn" data-wow-delay="0.4s">

                                                <!-- Secion heading -->
                                                <h3 class="mb-5  title font-weight-bold wow fadeIn"
                                                    data-wow-delay="0.2s">
                                                    <strong id="product_name">{{$single_product->name}}</strong>
                                                </h3>

                                                {!! $single_product->description !!}

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

                                                {!! $single_product->variations_description !!}
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
                                                {!! $single_product->variations_table !!}
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
                                                @foreach($single_product->variations as $variation)
                                                <!-- Description -->
                                                <button data-type="order_button" data-order-value="{{$variation->name}}"
                                                    type="button" class="btn blue-gradient btn-sm">
                                                    {{$variation->name}}
                                                </button>
                                                @endforeach
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

                                            <div class="alert alert-danger print-error-msg" style="display:none">
                                                    <ul></ul>
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

@endsection
