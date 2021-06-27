@extends('layouts.app')

@section('content')

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Services</h1>
            
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{asset('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Servisces
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
        @foreach($services as $service)
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                <span class="fa fa-home"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">{{$service->name}}</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                {!!(Str::words($service->description, 50))!!}
                </p>
              </div>
              <div class="card-footer-c">
                <a href="{{route('showService.view', [$service->slug, $service->id])}}" class="link-c link-icon">Read more
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->
  </main><!-- End #main -->
@endsection