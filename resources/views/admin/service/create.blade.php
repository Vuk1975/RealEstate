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
        <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
              <div class="card mb-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Service</h6>
                </div>
                <div class="card-body">
                    <div class="form-group"> 
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" aria-describedby=""
                        placeholder="Enter name of service" value="{{ old('name') }}">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    
                    </div>

                    <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control{{ $errors->has('img') ? ' border-danger' : '' }}" id="customFile" name="img" value="">
                                <small class="form-text text-danger">{!! $errors->first('img') !!}</small>
                    </div>
                    <div class="form-group">
                      <label for="">Description</label>
                      <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror ">{{old('description')}}</textarea>
                       @error('description')
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