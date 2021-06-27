@extends('layouts.app')
<!-- ======= Intro Single ======= -->
<section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{$blogpost->name}}</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{asset('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{asset('/blogposts')}}">Blog</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                {{$blogpost->name}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box">
              <img src="{{asset('/images/properties/'.$blogpost->img)}}" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-information">
              <ul class="list-inline text-center color-a">
                <li class="list-inline-item mr-2">
                  <strong>Author: </strong>
                  <span class="color-text-a">{{$blogpost->user->name}}</span>
                </li>
                <!--<li class="list-inline-item mr-2">
                  <strong>Category: </strong>
                  <span class="color-text-a">Travel</span>
                </li>-->
                <li class="list-inline-item">
                  <strong>Date: </strong>
                  <span class="color-text-a">{{$blogpost->created_at->diffForHumans()}};</span>
                </li>
              </ul>
            </div>
            <div class="post-content color-text-a">
              
              <p>
              {!! $blogpost->description !!}
              </p>
            </div>
            <div class="post-footer">
              <div class="post-share">
                <span>Share: </span>
                <ul class="list-inline socials">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single-->

@section('content')

