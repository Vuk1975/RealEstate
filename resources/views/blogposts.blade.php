@extends('layouts.app')

@section('content')

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Blog</h1>
            
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{asset('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Blog
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
        @foreach($blogposts as $blogpost)
        <div class="carousel-item-a">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="{{asset('/images/properties/'.$blogpost->img)}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <span class="ion-ios-quote"></span>
                    <h5 class="testimonial-author">{{$blogpost->name}}</h5>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                    {!! (Str::words($blogpost->description, 25)) !!}
                    </p>
                  </div>
                  <div class="testimonial-author-box"> 
                  <div class="card-footer-c">
                    <a href="{{route('showBlogpost.view', [$blogpost->slug, $blogpost->id])}}" class="link-c link-icon">Read more</a>
                  <span class="ion-ios-arrow-forward"></span>
              </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach 
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->
@endsection