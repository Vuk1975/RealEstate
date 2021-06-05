@extends('admin.layouts.main')

@section('content')
    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            
            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                      <h6 class="m-0 font-weight-bold text-primary">Property details</h6>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Property ID:</h6>
                        <span>{{$property->id}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Location:</h6>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Price:</h6>
                        <span>€ </span>
                        <span>{{$property->price}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Property Type:</h6>
                        <span>{{$property->subcategory->name}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Status:</h6>
                        <span>{{$property->category->name}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Area:</h6>
                        <span>{{$property->area}}m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Flor:</h6>
                        <span>{{$property->at_flor}}/{{$property->flors}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Rooms:</h6>
                        <span>{{$property->area}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Baths:</h6>
                        <span>{{$property->bathrooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Bathrooms:</h6>
                        <span>{{$property->badrooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Construction year:</h6>
                        <span>{{$property->year}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                  <h6 class="m-0 font-weight-bold text-primary">Description:</h6>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    {!! $property->description !!}
                  </p>
                </div>
                <div class="row">
                  <div class="col-sm-12 pt-2">
                  <h6 class="m-0 font-weight-bold text-primary">Additional info:</h6>
                  </div>
                </div>
                <div>
                  <p>
                    {!! $property->additional_info !!}
                  </p>
                </div>
                <div class="row pt-4">
                  <div class="col-sm-12">
                    <h6 class="m-0 font-weight-bold text-primary">Amenities:</h6>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  
                    @if($property->tags->count() > 0)
                    <ul >Used Tags: (Click to remove)
                        @foreach($property->tags as $tag)
                          <li><a href="/property/{{$property->id}}/tag/{{$tag->id}}/detach"><span class="badge badge-secundadry" style="font-size:12pt">{{ $tag->name }}</span></a></li>
                        @endforeach
                    </ul>
                    @endif

                    @if($availableTags->count() > 0)
                    <ul>Available Tags: (Click to assign)
                        @foreach($availableTags as $tag)
                          <li><a href="/property/{{$property->id}}/tag/{{$tag->id}}/attach"><span class="badge badge-secundadry" style="font-size:12pt">{{ $tag->name }}</span></a></li>
                        @endforeach
                    </ul>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->
@endsection