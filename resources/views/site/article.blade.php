@extends('layouts.app')

@section('title')
    Статьи - {{$single_article->name}}
@endsection

@section('metakeywords')
    {{$single_article->metakeywords}}
@endsection

@section('metadescription')
    {{$single_article->metadescription}}
@endsection

@section('content')

        <section>
            <div style="background:url('/img/backgrounds/page_bg1.jpg'); background-size:cover; height: 410px;" class="d-flex justify-content-center">
              <table style="height: 90%;">
                  <tr>
                      <td class="align-middle">
                  <img src="/img/logo.png" class="wow fadeIn align-middle" data-wow-delay="0.3s" alt="mdb logo">
                  </td>
                  </tr>
              </table>
          </div>
        </section>

    </header>

    <main>
        <div class="container">

            <!-- Section: Blog v.4 -->
            <section class="mt-5 pb-3 wow fadeIn">
      
              <!-- Grid row -->
              <div class="row">
      
                <!-- Grid column -->
                <div class="col-md-12">
      
                  <!-- Featured image -->
                  <div class="card card-cascade wider reverse">
                    <div class="view view-cascade overlay">
                      <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(134).jpg" alt="Wide sample post image" class="img-fluid">
                      <a>
                        <div class=""></div>
                      </a>
                    </div>
      
                    <!-- Post data -->
                    <div class="card-body card-body-cascade text-center">
                      <h2><a><strong>{{$single_article->name}}</strong></a></h2>
                      <p>{{$single_article->created_at}}</p>
      
                    </div>
                    <!-- Post data -->
                  </div>
      
                  <!-- Excerpt -->
                  <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
                    
                    {!! $single_article->description !!}
      
                  </div>
      
                </div>
                <!-- Grid column -->
      
              </div>
              <!-- Grid row -->
      
            </section>
            <!-- Section: Blog v.4 -->
      
            <hr class="mb-5 mt-4">
      
            <!-- Section: Blog v.2 -->
            <section class="mb-5 wow fadeIn" data-wow-delay="0.3s">
      
              <!-- Section heading -->
              <h3 class="text-center my-5 text-center h3">Другие статьи</h3>
      
              <!-- Grid row -->
              <div class="row">
      
                <!-- Grid column -->
                @foreach ($other_articles as $other_article)   
                
                <div class="col-lg-4 col-md-12 mb-4">
      
                  <!-- Card Light -->
                  <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">
                      <img src="{{ asset('/storage/' .$other_article->image)}}" class="card-img-top"
                        alt="">
                      <a>
                        <div class="mask"></div>
                      </a>
                    </div>
                    <!-- /.Card image -->
                    <!-- Card content -->
                    <div class="card-body">
                      <!-- Social shares button -->
                      <a class="activator mr-3"><i class="fas fa-share-alt"></i></a>
                      <!-- Title -->
                      <h4 class="card-title">{{$other_article->name}}</h4>
                      <hr>
                      <!-- Text -->
                      <p class="card-text">{!! $other_article->short_description !!}</p>
                      <a class="link-text" href="{{ route('statya', $other_article->slug) }}">
                        <h5>Подробнее <i class="fas fa-chevron-right"></i></h5>
                      </a>
                    </div>
                    <!-- /.Card content -->
                  </div>
                  <!-- /.Card Light -->
      
                </div>
                <!-- Grid column -->

                @endforeach
              </div>
              <!-- Grid row -->
      
            </section>
            <!-- Section: Blog v.2 -->
      
          </div>
    </main>

@endsection
