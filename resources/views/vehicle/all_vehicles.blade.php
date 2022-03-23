@extends('layouts.app')

@section('content')
@component('components.header') @endcomponent
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
@component('components.aside', ['page' => 'vehicles']) @endcomponent
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
                            <h2 class="title-1">vehicle</h2>
                            <a class="au-btn au-btn-icon au-btn--blue" href="{{route('vehicle.create')}}">
                                <i class="zmdi zmdi-plus"></i>add vehicle</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Vehicles</strong></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Brand</th>
                                            <th>Make</th>
                                            <th>Year</th>
                                            <th>Approval</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($vehicles as $veh)
                                            <tr>
                                                <td>{{$veh->id}}</td>
                                                <td>{{$veh->name}}</td>
                                                <td>{{$veh->brand_name}}</td>
                                                <td>{{$veh->model_name}}</td>
                                                <td>{{$veh->year}}</td>
                                                <td>
                                                    @if(Auth::user()->role == 1)
                                                        @if($veh->approved)
                                                            <span class="badge badge-success">Approved</span>
                                                        @else
                                                            <a href="{{route('vehicle.approve', $veh->id)}}" class="btn btn-danger btn-sm">Click to Approve</a>
                                                        @endif
                                                    @else
                                                        @if($veh->approved)
                                                            <span class="badge badge-success">Approved</span>
                                                        @else
                                                            <span class="badge badge-danger">Not Approved</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('vehicle.show', $veh->id)}}" class="btn btn-primary btn-sm">Show</a>
                                                    <a href="{{route('vehicle.edit', $veh->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
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