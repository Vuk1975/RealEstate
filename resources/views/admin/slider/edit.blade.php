@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Slider</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Slider</li>
            </ol>
    </div>

    <div class="row justify-content-center">
    @if(Session::has('message'))
      <div class="alert alert-success">
        {{Session::get('message')}}
      </div>
    @endif
      <div class="col-lg-10">
        <form action="{{route('slider.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
              <div class="card mb-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Update</h6>
                </div>
                <div class="card-body">
                    
                   
                    <div class="form-group">
                                <label for="image">Image</label>
                                <td><img src="{{url('/images/slider/'.$slider->img)}}" width="250"></td>    
                    </div>
                    
                    <div class="form-group"> 
                      <label for="">Title Top</label>
                      <input type="text" name="titleTop" class="form-control @error('titleTop') is-invalid @enderror" id="" aria-describedby=""
                        placeholder="Enter Title Top" value="{{ $slider->titleTop }}">
                        @error('titleTop')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    
                    </div>

                    <div class="form-group"> 
                      <label for="">Intro Title Top</label>
                      <input type="text" name="introTitleTop" class="form-control @error('introTitleTop') is-invalid @enderror" id="" aria-describedby=""
                        placeholder="Enter Intro Title Top" value="{{ $slider->introTitleTop }}">
                        @error('introTitleTop')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    
                    </div>

                    <div class="form-group"> 
                      <label for="">Intro Subtitle</label>
                      <input type="text" name="introSubtitle" class="form-control @error('introSubtitle') is-invalid @enderror" id="" aria-describedby=""
                        placeholder="Enter Intro Subtitle" value="{{ $slider->introSubtitle }}">
                        @error('introTitleTop')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    
                    </div>

                    <div class="form-group"> 
                      <label for="">Intro Link</label>
                      <input type="text" name="introLink" class="form-control @error('introLink') is-invalid @enderror" id="" aria-describedby=""
                        placeholder="Enter Intro Link" value="{{ $slider->introLink }}">
                        @error('introTitleTop')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    
                    </div>
                  


                       
                   
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>

          </div>
</div>
@endsection