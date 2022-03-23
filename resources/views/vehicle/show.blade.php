@extends('layouts.app')

@section('content')
@component('components.header') @endcomponent
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
@component('components.aside', ['page' => 'vehicle']) @endcomponent
<!-- END MENU SIDEBAR-->
<style>
    table tr td span{display: block; font-size: 14px; text-transform: uppercase;}
</style>
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
                            <h2 class="title-1">vehicle detail</h2>
                            <a href="{{route('vehicle.index')}}" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>go back</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Vehicle Details</strong></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><span>Name</span>{{$vehicle->name}}</td>
                                            <td><span>Vehicle Type</span>{{$vehicle->vehicle_type}}</td>
                                            <td><span>Brand</span>{{$vehicle->brand_name}}</td>
                                            <td><span>Vehicle Make</span>{{$vehicle->model_name}}</td>
                                            <td><span>Vehicle Usage</span>{{$vehicle->usage}}</td>
                                        </tr>
                                        <tr>
                                            <td><span>Year</span>{{$vehicle->year}}</td>
                                            <td><span>Millage</span>{{$vehicle->millage}} km</td>
                                            <td><span>Colour</span>{{$vehicle->colour}}</td>
                                            <td><span>Transmission</span>{{$vehicle->transmission}}</td>
                                            <td><span>Fuel</span>{{$vehicle->fuel_type}}</td>
                                        </tr>
                                        <tr>
                                            <td><span>Engine Number</span>{{$vehicle->engine_number}}</td>
                                            <td><span>Number of Gear</span>{{$vehicle->number_of_gear}}</td>
                                            <td><span>Drive Type</span>{{$vehicle->drive_type}}</td>
                                            <td><span>Body Style</span>{{$vehicle->body_style}}</td>
                                            <td><span>Number of Door</span>{{$vehicle->number_of_door}}</td>
                                        </tr>
                                        <tr>
                                            <td><span>Horse Power</span>{{$vehicle->horse_type}}</td>
                                            <td><span>Location</span>{{$vehicle->location}}</td>
                                            <td><span>Price</span>{{$vehicle->price}}</td>
                                            <td><span>Approval</span>@if($vehicle->approved)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-danger">Not Approved</span>
                                            @endif</td>
                                            <td><span>Featured</span>@if($vehicle->featured)
                                                <span class="badge badge-success">Featured</span>
                                            @else
                                                <span class="badge badge-danger">Not featured</span>
                                            @endif</td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><span>Description</span>{{$vehicle->description}}</td>
                                        </tr>
                                    </table>
                                </div>
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

@endsection