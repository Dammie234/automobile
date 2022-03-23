@extends('layouts.app')

@section('content')
@component('components.header') @endcomponent
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
@component('components.aside', ['page' => 'vehicle']) @endcomponent
<!-- END MENU SIDEBAR-->

<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- HEADER DESKTOP-->
    @component('components.header_desktop') @endcomponent
    <!-- HEADER DESKTOP-->

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if(session('error'))
                        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                            <span class="badge badge-pill badge-danger">Whoops</span>
                            {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        @endif
                        @if(session('success'))
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                <span class="badge badge-pill badge-success">Success</span>
                                {{session('success')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <div class="overview-wrap">
                            <h2 class="title-1">Edit vehicle</h2>
                            <a class="au-btn au-btn-icon au-btn--blue" href="{{route('vehicle.index')}}">
                                <i class="zmdi zmdi-plus"></i>go back</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                               <strong>Edit Vehicle</strong> 
                            </div>
                            <div class="card-body">
                                <form action="{{route('vehicle.update', $vehicle->id)}}" method="POST"> 
                                    @csrf
                                    <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label for="type">Vehicle Type:</label>
                                            <select name="vehicle_type" id="type" class="form-control @error('vehicle_type') is-invalid @enderror">
                                                <option value="{{$vehicle->vehicle_type}}">{{$vehicle->vehicle_type}}</option>
                                                <option value="car">Car</option>
                                                <option value="suv">SUV</option>
                                                <option value="truck">Truck</option>
                                            </select>
                                            @error('vehicle_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="brand">Brand:</label>
                                            <select name="brand" id="brand" class="form-control @error('brand') is-invalid @enderror"  value="{{$vehicle->brand}}">
                                                <option value="">Select your brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                @endforeach()
                                            </select>
                                            @error('brand')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="model">Model:</label>
                                            <select name="make" id="model" class="form-control @error('model') is-invalid @enderror">
                                                <option value="0" disable="true" selected="true"> Select Model </option>
                                            </select>
                                            @error('model')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="year">Year:</label>
                                            <select name="year" id="year" class="form-control @error('year') is-invalid @enderror">
                                                <option value="{{$vehicle->year}}">{{$vehicle->year}}</option>
                                                <option value="2010">2010</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                            </select>
                                            @error('year')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="body">Body:</label>
                                            <select name="body_style" id="body" class="form-control @error('body_style') is-invalid @enderror">
                                                <option value="{{$vehicle->body}}">{{$vehicle->body}}</option>
                                                <option value="sedan">Sedan</option>
                                                <option value="coupe">Coupe</option>
                                                <option value="hatchback">Hatchback</option>
                                                <option value="convertible">Convertible</option>
                                                <option value="minivan">Mini Van</option>
                                            </select>
                                            @error('body')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="usage">Usage:</label>
                                            <select name="usage" id="usage" class="form-control @error('usage') is-invalid @enderror">
                                                <option value="{{$vehicle->usage}}">{{$vehicle->usage}}</option>
                                                <option value="new">New</option>
                                                <option value="foreign">Foreign Used</option>
                                                <option value="nigerian">Nigerian Used</option>
                                            </select>
                                            @error('usage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="milage">Milage:</label>
                                            <input type="text" name="millage" id="milage" value="{{$vehicle->millage}}" class="form-control @error('millage') is-invalid @enderror">
                                            @error('milage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="colour">Colour:</label>
                                            <select name="colour" id="colour" class="form-control @error('colour') is-invalid @enderror">
                                                <option value="{{$vehicle->colour}}">{{$vehicle->colour}}</option>
                                                <option value="black">Black</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="brown">Brown</option>
                                                <option value="white">White</option>
                                            </select>
                                            @error('colour')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="transmission">Transmission:</label>
                                            <select name="transmission" id="transmission" class="form-control @error('transmission') is-invalid @enderror">
                                                <option value="{{$vehicle->transmission}}">{{$vehicle->transmission}}</option>
                                                <option value="manual">Manual</option>
                                                <option value="auto">Auto</option>
                                            </select>
                                            @error('transmission')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="fuel">Fuel Type:</label>
                                            <select name="fuel_type" id="fuel" class="form-control @error('fuel') is-invalid @enderror">
                                                <option value="{{$vehicle->fuel_type}}">{{$vehicle->fuel_type}}</option>
                                                <option value="petrol">Petrol</option>
                                                <option value="diesel">diesel</option>
                                            </select>
                                            @error('fuel')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="drive">Drive:</label>
                                            <select name="drive_type" id="drive" class="form-control @error('drive_type') is-invalid @enderror" >
                                                <option value="{{$vehicle->drive_type}}">{{$vehicle->drive_type}}</option>
                                                <option value="awd">Awd</option>
                                                <option value="fwd">Fwd</option>
                                                <option value="rwd">Rwd</option>
                                                <option value="4wd">4wd</option>
                                            </select>
                                            @error('drive')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="engine">Engine #:</label>
                                            <input type="text" name="engine_number" id="engine" value="{{$vehicle->engine_number}}" class="form-control @error('engine_number') is-invalid @enderror">
                                            @error('engine')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-5 form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" id="name"  value="{{$vehicle->name}}" class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-4 form-group">
                                            <label for="video_url">Video URL:</label>
                                            <input type="text" name="video_url" id="video_url" value="{{$vehicle->video_url}}" class="form-control @error('video_url') is-invalid @enderror">
                                            @error('video_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label for="horse_type">Horse Power:</label>
                                            <input type="text" name="horse_type" value="{{$vehicle->horse_type}}" id="horse_type" class="form-control @error('horse_type') is-invalid @enderror">
                                            @error('horse_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="gear">Number of Gear:</label>
                                            <input type="text" name="number_of_gear" value="{{$vehicle->number_of_gear}}" id="gear" class="form-control @error('number_of_gear') is-invalid @enderror">
                                            @error('number_of_gear')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="door">Number of Door:</label>
                                            <input type="text" name="door" id="door" value="{{$vehicle->number_of_door}}" class="form-control @error('door') is-invalid @enderror">
                                            @error('door')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="location"> Location:</label>
                                            <input class="form-control form-control @error('location') is-invalid @enderror" value="{{$vehicle->location}}" type="text" name="location" id="location">
                                            @error('location')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="price"> Price:</label>
                                            <input class="form-control form-control @error('price') is-invalid @enderror" value="{{$vehicle->price}}" type="text" name="price" id="price">
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description">Description:</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" value="{{$vehicle->description}}" name="description" rows="5"></textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        
                                    </div>
                                    <input type="submit" value="Add Vehicle" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @component('components.footer') @endcomponent
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
      $('#brand').on('change', function(e){
        console.log(e);
        var brand_id = e.target.value;
        $.get('/json-model?brand_id=' + brand_id,function(data) {
          console.log(data);
          $('#model').empty();
          $('#model').append('<option value="0" disable="true" selected="true">Select your model </option>');

          $.each(data, function(index, typesObj){
            $('#model').append('<option value="'+ typesObj.id +'">'+ typesObj.model +'</option>');
          })
        });
      });
    </script>
    
@endsection