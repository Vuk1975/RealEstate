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
        <form action="{{route('property.update', [$property->id])}}" method="POST" enctype="multipart/form-data">@csrf
        {{method_field('PUT')}}
              <div class="card md-6">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Property</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 p-3">
                            <div class="form-group"> 
                                <label for="">Srteet</label>
                                    <input type="text" name="street" class="form-control @error('street') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="Enter street name" value="{{$property->street}}">
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
                                placeholder="Enter Quart name" value="{{$property->quart}}">
                                @error('quart')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                        </div>
                    </div>

                    </div>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="card">
                                    <div class="card-header"><b>Cover Photo<b></div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>
                                                <img src="{{asset('/images/properties/'.$property->img)}}" alt="..." class="img-thumbnail img-check">
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
                    <div class="row">
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                                <label for="">Area</label>
                                    <input type="number" name="area" class="form-control @error('area') is-invalid @enderror " id="" aria-describedby="" 
                                    placeholder="Enter area in m2" value="{{$property->area}}">
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
                                    placeholder="Enter registered area in m2" value="{{$property->registered_area}}">
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
                                    placeholder="Number of bathrooms" value="{{$property->bathrooms}}">
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
                                    placeholder="Number of badrooms" value="{{$property->badrooms}}">
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
                                    value="{{$property->window_type}}">
                                            @error('area')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                            </div>
                        </div>
                    </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">Water outlets</label>
                                <input type="number" name="water_outlets" class="form-control @error('water_outlets') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="" value="{{$property->water_outlets}}"> 
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
                                        <option {{ ($property->rooms) == '0.5' ? 'selected' : '' }} value="0.5">0.5 room</option>
                                        <option {{ ($property->rooms) == '1' ? 'selected' : ''}} value="1.0">1.0-room</option>
                                        <option {{ ($property->rooms) == '1.5' ? 'selected' : ''}} value="1.5">1.5-rooms</option>
                                        <option {{ ($property->rooms) == '2' ? 'selected' : ''}} value="2.0">2.0-rooms</option>
                                        <option {{ ($property->rooms) == '2.5' ? 'selected' : ''}} value="2.5">2.5-rooms</option>
                                        <option {{ ($property->rooms) == '3' ? 'selected' : ''}} value="3.0">3.0-rooms</option>
                                        <option {{ ($property->rooms) == '3.5' ? 'selected' : ''}} value="3.5">3.5-rooms</option>
                                        <option {{ ($property->rooms) == '4.0' ? 'selected' : ''}} value="4.0">4.0-rooms</option>
                                        <option {{ ($property->rooms) == '4.5' ? 'selected' : ''}} value="4.5">4.5-rooms</option>
                                        <option {{ ($property->rooms) == '5' ? 'selected' : ''}} value="5.0">5.0-rooms</option>
                                    </select>
                                    {{$property->structure}}
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group"> 
                            <label for="">At flor</label>
                                <input type="number" name="at_flor" class="form-control @error('at_flor') is-invalid @enderror " id="" aria-describedby=""
                                    placeholder="" value="{{$property->at_flor}}">
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
                                    placeholder="" value="{{$property->flors}}">
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
                                value="{{$property->year}}">
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
                      <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror ">
                        {{$property->description}}</textarea>
                       @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                      
                    </div>

                      <div class="form-group"> 
                      <label for="">Price($)</label>
                      <input type="number" name="price" class="form-control @error('price') is-invalid @enderror " id="" aria-describedby=""
                      value="{{$property->price}}">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    
                    </div>
                      <div class="form-group">
                      <label for="">Additional information</label>
                      <textarea name="additional_info" id="summernote1" class="form-control @error('additional_info') is-invalid @enderror ">{{$property->additional_info}}</textarea>
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
                          @if($property->category_id)
                                <option value="{{$property->category_id}}" selected>{{$category->name}}</option>
                          @foreach(App\Models\Category::all() as $key=> $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                          @endif

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
                          @if($property->subcategory_id)
                                <option value="{{$property->subcategory_id}}" selected>{{$subcategory->name}}</option>
                          @else
                          @foreach(App\Models\Subategory::all() as $key=> $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                          @endforeach
                          @endif
                          

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


