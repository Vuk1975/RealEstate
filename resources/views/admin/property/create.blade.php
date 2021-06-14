@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Property</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Property</li>
            </ol>
    </div>

    <div class="row justify-content-center">
      @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>

      @endif
    
      <div class="col-lg-10" id="app">
        <form action="{{route('property.store')}}" method="POST" enctype="multipart/form-data">@csrf
              <div class="card md-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Create Property</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 p-3">
                            <div class="form-group"> 
                                <label for="">Srteet</label>
                                    <input type="text" name="street" class="form-control @error('street') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="Enter street name" value="{{old('street')}}">
                                        @error('street')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                    
                            </div>
                        </div>
                        <div class="col-md-6 p-3"><div class="form-group"> 
                            <label for="">Quart</label>
                                <input type="text" name="quart" class="form-control @error('quart') is-invalid @enderror " id="" aria-describedby=""
                                placeholder="Enter Quart name" value="{{old('quart')}}">
                                @error('quart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                        </div>
                    </div>

                    </div>
                    <div class="form-group">
                      <div class="custom-file">
                            <input type="file" name="img" style="min-width: 100%!important;" >
                        
                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                      </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                                <label for="">Area</label>
                                    <input type="number" name="area" class="form-control @error('area') is-invalid @enderror " id="" aria-describedby="" 
                                    placeholder="Enter area in m2" value="{{old('area')}}">
                                            @error('area')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">Registered area</label>
                                <input type="number" name="registered_area" class="form-control @error('registered_area') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="Enter registered area in m2" value="{{old('registered_area')}}">
                                    @error('registered_area')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                                <label for="">Bathrooms</label>
                                    <input type="number" name="bathrooms" class="form-control @error('bathrooms') is-invalid @enderror " id="" aria-describedby="" 
                                    placeholder="Number of bathrooms" value="{{old('bathrooms')}}">
                                            @error('area')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">Badrooms</label>
                                <input type="number" name="badrooms" class="form-control @error('badrooms') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="Number of badrooms" value="{{old('badrooms')}}">
                                    @error('badrooms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                                <label for="">Window type</label>
                                    <input type="text" name="window_type" class="form-control @error('window_type') is-invalid @enderror " id="" aria-describedby="" 
                                    value="{{old('window_type')}}">
                                            @error('area')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">Water outlets</label>
                                <input type="number" name="water_outlets" class="form-control @error('water_outlets') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="" value="{{old('water_outlets')}}"> 
                                    @error('water_outlets')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    
                            </div>
                        </div>
                       
                    </div>


                    <div class="row">
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                                <label for="rooms">Structure</label></br>
                                    <select class="form-select" name="rooms" id="">
                                        <option value="studio">0.5 room</option>
                                        <option value="one room">1.0-room</option>
                                        <option value="two and a half rooms">1.5-rooms</option>
                                        <option value="two bedrooms">2.0-rooms</option>
                                        <option value="two and a half rooms">2.5-rooms</option>
                                        <option value="three rooms">3.0-rooms</option>
                                        <option value="three and a half rooms">3.5-rooms</option>
                                        <option value="four rooms">3.5-rooms</option>
                                        <option value="four and a half rooms">4.5-rooms</option>
                                        <option value="five rooms">5.0-rooms</option>
                                    </select>
                    
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">At flor</label>
                                <input type="number" name="at_flor" class="form-control @error('at_flor') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="" value="{{old('at_flor')}}">
                                    @error('at_flor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">Of Flors</label>
                                <input type="number" name="flors" class="form-control @error('flors') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="" value="{{old('flors')}}">
                                    @error('flors')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">Year of construction</label>
                                <input type="number" name="year" class="form-control @error('year') is-invalid @enderror " id="" aria-describedby=""
                                value="{{old('year')}}">
                                    @error('year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    
                            </div>
                        </div>


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

                      <div class="form-group"> 
                      <label for="">Price($)</label>
                      <input type="number" name="price" class="form-control @error('price') is-invalid @enderror " id="" aria-describedby=""
                      value="{{old('price')}}">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
                    </div>
                      <div class="form-group">
                      <label for="">Additional information</label>
                      <textarea name="additional_info" id="summernote1" class="form-control @error('additional_info') is-invalid @enderror ">{{old('additional_info')}}</textarea>
                       @error('additional_info')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>
                <div class="form-group">
                      <label for="">Choose Category</label>
                        <select name="category"  class="form-control @error('category') is-invalid @enderror" >
                          <option value="">select</option>
                          @foreach(App\Models\Category::all() as $key=> $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach

                        </select>

                       @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                </div>

            
                <div class="form-group">
                      <label for="">Choose Subcategory</label>
                        <select name="subcategory"  class="form-control @error('subcategory') is-invalid @enderror" >

                          <option value="">select</option>
                          

                        </select>

                    
                      
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                 
                </div>
              </div>
            </form>

          </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $("document").ready(function(){
        $('select[name="category"]').on('change',function(){
            var catId = $(this).val();
            if (catId){
                $.ajax({
                    url:'/subcategories/'+catId,
                    type:"GET",
                    dataType:"json",
                    success: function(data){
                        $('select[name="subcategory"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory"]').append('<option value=" '+key+' ">'+value+'</option>');
                        })
                    }
                })
            }else{
                
                $('select[name="subcategory"]').empty();
            }
        });
    });
</script>

@endsection