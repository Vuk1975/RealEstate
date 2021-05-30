@extends('admin.layouts.main')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="card">
                        <div class="card-header"><b>Property Photos - select for delete photos!<b></div>
                        <form method="post" action="{{route('image.update', $image->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <b>{{$property->street}}, {{$property->quart}}</b>
                                    </div>
                                    <div class="row">
                                
                                        @foreach(json_decode($image->pathName, true) as $photo)
                                        <div class="col-md-3">
                                            <label class="btn">
                                        <img src="{{asset('/images/properties/'.$photo)}}" alt="..." class="img-thumbnail img-check">
                                            <input type="checkbox" name="deleteImage[]" id="item4" value="{{$photo}}" autocomplete="off"></label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <input type="file" name="pathName[]" style="min-width: 80%!important;" class="myfrm form-control row">
                                    <hr>
                            
                                    <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                            </div>
                       
                           
     

                    <button value="Submit" name="submit" type="submit" class="btn btn-primary float-right m-2" style="margin-top:10px">Submit</button>


                    </form>  
                </div>


                <!--
                <div class="mt-2">
                    <a class="btn btn-primary btn-sm" href="{{ URL::previous() }}"><i class="fas fa-arrow-circle-up"></i> Back to Overview</a>
                </div>
                -->
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
      $(document).ready(function(){
        $('.btn-success').click(function(e){
          e.preventDefault();
          $(this).before("<div class='row'><input type='file' name='pathName[]'  style='min-width: 100%!important;' class='form-control'></div>");
        });
      });
    </script>
@endsection