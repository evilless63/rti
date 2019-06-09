@extends('layouts.app')

@section('title', 'Статьи и новости')
@section('metakeywords', 'Статьи РТИ, Новости РТИ Трейдинг')
@section('metadescription', 'Новости компании РТИ Трейдинг. Полезные статьи на тему Резино-технических изделий')

@section('content')
<section>
      <div class="">
        <img src="img/backgrounds/page_bg1.jpg" style="width: 100%">
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
                <!-- Blog section -->
                <section>

                  <div class="container">

                    <!-- Section heading -->
                    <h2 class="font-weight-bold my-5 text-center">Последние новости и статьи</h2>

                    <!-- Section description -->
                    <p class=" w-responsive text-center mx-auto mb-5">Приглашаем Вас ознакомиться с новостями нашей компании, а также получить полезную информацию о приобретаемых товарах.</p>

                    <!-- Grid row -->
                    <div class="row text-center mb-2">
                      @foreach($articles as $k=>$article)
                      <!-- Grid column -->
                      <div class="col-lg-4 col-md-12 mb-5">
                        <!-- Featured image -->
                        <div class="view overlay rounded z-depth-1 mb-2">
                          <img src="{{ asset('/storage/' .$article->image)}}" class="img-fluid"
                            alt="{{$article->name}}">
                          <a>
                            <div class="mask rgba-white-slight"></div>
                          </a>
                        </div>

                        <h4 class="mb-2 mt-4 font-weight-bold">{{$article->name}}</h4>

                        <!-- Grid row -->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-lg-6 col-md-6 text-lg-right ">
                            <p class="">
                              <i class="far fa-clock-o" aria-hidden="true"></i> {{$article->created_at}}</p>
                          </div>
                          <!-- Grid column -->

                        
                        </div>
                        <!-- Grid row -->
                        <p class="dark-">{!!$article->short_description!!}</p>
                        <a class="{{ route('statya', $article->slug) }}">Подробнее</a>
                        <hr class="mt-1" style="max-width: 90px">
                      </div>
                      <!-- Grid column -->
                      @endforeach

                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row text-center mb-2">


                    </div>
                    <!-- Grid row -->

                    <!-- Grid row -->
                    <div class="row text-center mb-4">

                      

                    </div>
                    <!-- Grid row -->

                    <!-- Pagination -->
                    <nav class="my-4 flex-center">
                      <ul class="list-unstyled pagination pagination-circle pg-blue mb-0">

                        <!-- First -->
                        <!-- <li class="page-item disabled clearfix d-none d-md-block">
                          <a class="page-link">First</a>
                        </li> -->
                        {{$articles->onFirstPage()}}

                        <!-- Arrow left -->
                        <!-- <li class="page-item disabled">
                          <a class="page-link" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                          </a>
                        </li> -->
                        {{$articles->previousPageUrl()}}

                        <!-- Numbers -->
                        <!-- <li class="page-item active">
                          <a class="page-link">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link">4</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link">5</a>
                        </li> -->
                        {{$articles->links()}}

                        <!-- Arrow right -->
                        <!-- <li class="page-item">
                          <a class="page-link" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                          </a>
                        </li> -->
                        {{$articles->nextPageUrl()}}

                        <!-- First -->
                        <!-- <li class="page-item clearfix d-none d-md-block">
                          <a class="page-link">Last</a>
                        </li> -->
                        {{$articles->lastPage()}}

                      </ul>
                    </nav>
                    <!-- Pagination -->

                  </div>

                </section>
                <!-- Blog section -->

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
