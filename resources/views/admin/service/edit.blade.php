
@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Service</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
    </div>

    <div class="row justify-content-center">
      @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>

      @endif

      <div class="col-lg-10">
        <form action="{{route('service.update',[$service->id])}}" method="POST" enctype="multipart/form-data">@csrf
        	{{method_field('PUT')}}
              <div class="card mb-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Service</h6>
                </div>
                <div class="card-body">
                    <div class="form-group"> 
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="" aria-describedby=""
                        placeholder="Enter name of service" value="{{$service->name}}">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
                    </div>
                    <div class="row">
                            <div class="col-md-11">
                                <div class="card">
                                    <div class="card-header"><b>Cover Photo<b></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                <img src="{{asset('/images/properties/'.$service->img)}}" alt="..." class="img-thumbnail img-check">
                                            </div>
                                            <hr>
                                        </div>
                                       
                        
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                    </div>
                       
                           
                                </div>
                            </div>                 
                    </div>
                    <div class="row">
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                                <label for="">Choose new cover photo</label></label>
                                <input type="file" name="img" style="min-width: 100%!important;" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror ">
                      	{!!$service->description!!}
                      </textarea>
                       @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>
                   
                    <br>
                   
                    <button type="submit" class="btn btn-primary mt-5">Update</button>
                 
                </div>
              </div>
            </form>

          </div>
</div>
@endsection