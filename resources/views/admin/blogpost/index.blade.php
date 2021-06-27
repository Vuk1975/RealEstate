@extends('admin.layouts.main')

@section('content')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- <h1 class="h3 mb-0 text-gray-800">Simple Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>-->
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Blog Post Table</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th></th>
                        <th>Action</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                    @if(count($blogposts)>0)
                        @foreach($blogposts as $key=>$blogpost)
                      <tr>
                        <td><a href="#">{{$key + 1}}</a></td>
                        <td>{{$blogpost->name}}</td>
                        <td><a href="{{route('blogpost.edit',[$blogpost->id])}}" class="btn btn-sm btn-primary">Edit</a></td>
                        <td>
                        <form action="{{route('blogpost.destroy', [$blogpost->id])}}" method="POST"
                            onsubmit="return confirmDelete()"> 
                            @csrf   
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button></td>
                        </form>
                      </tr>
                      @endforeach
                      @else
                        <td>No Blog Post jet</td>
                      @endif
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->


@endsection