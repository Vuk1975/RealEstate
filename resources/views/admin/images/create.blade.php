
@extends('admin.layouts.main')

@section('content')

<div class="container lst">


@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif


@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif


<div class="container lst">


@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif


@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif


<h3 class="well">Laravel 6 Multiple File Upload</h3>
<form method="post" action="{{route('image.store', $id)}}" enctype="multipart/form-data">
  {{csrf_field()}}


      <div class="input-group hdtuto control-group ">
          <input type="file" name="pathName[]" style="min-width: 100%!important;" class="myfrm form-control row">

          <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
      </div>
      <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
      
    
</form>        
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
      $(document).ready(function(){
        $('.btn-success').click(function(e){
          e.preventDefault();
          $(this).before("<input type='file' name='pathName[]' style='min-width: 100%!important;' class='myfrm form-control row'>");
        });
      });
    </script>

@endsection