@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
    </div>
    <!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>#ID</th>
                        <th>Street</th>
                        <th>Quart</th>
                        <th>Area</th>
                        <th>Structure</th>
                        <th>Bathrooms</th>
                        <th>Badrooms</th>
                        <th>Flor</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Action</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      @if(count($properties)>0)
                      @foreach($properties as $property)
                      <tr>
                        <td>{{$property->id}}</td>
                        <td>{{$property->street}}</td>
                        <td>{{$property->quart}}</td>
                        <td>{{$property->area}}</td>
                        <th>{{$property->rooms}}-room</th>
                        <td>{{$property->bathrooms}}</td>
                        <td>{{$property->badrooms}}</td>
                        <td>{{$property->at_flor}}/{{$property->flors}}</td>
                        <td>{{$property->price}}</td>
                        <td>{{$property->category->name}}</td>

                        <td>
                          <a href="{{route('property.edit',[$property->id])}}">
                              <button class="btn btn-sm btn-primary">Edit</button>
                          </a>
                        </td>
                        <td>
                           <form action="{{route('property.destroy',[$property->id])}}" method="POST" onsubmit="return confirmDelete()">@csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                            
                          </form>
                        </td>

                         
                      </tr>
                      @endforeach
                      @else
                      <td>No any product</td>
                      @endif
                    

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

 @endsection