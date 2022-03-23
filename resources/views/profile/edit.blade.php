@extends('layouts.app')

@section('content')
@component('components.header') @endcomponent
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
@component('components.aside') @endcomponent
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
                            <h2 class="title-1">Edit Profile</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit Profile</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="{{route('profile.update')}}" method="post">
                                    @csrf
                                    <fieldset>
                                        <legend><small>Biodata</small></legend>
                                        <div class="form-group">
                                            <label for="name" class="form-control-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="form-control-label">Email Address</label>
                                            <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="gender" class="form-control-label">Gender</label>
                                            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                                <option value=""></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="nin_number" class="form-control-label">NIN Number</label>
                                            <input type="text" name="nin_number" id="nin_number" class="form-control @error('nin_number') is-invalid @enderror" value="{{$user->nin_number}}">
                                            @error('nin_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="form-control-label">Address</label>
                                            <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{$user->address}}">
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="form-control-label">Mobile Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend><small>Business Infromation</small></legend>
                                        <div class="form-group">
                                            <label for="company_name" class="form-control-label">Company Name</label>
                                            <input type="text" name="company_name" id="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{$user->company_name}}">
                                            @error('company_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="office_address" class="form-control-label">Office Address</label>
                                            <input type="text" name="office_address" id="office_address" class="form-control @error('office_address') is-invalid @enderror" value="{{$user->office_address}}">
                                            @error('office_address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="office_phone" class="form-control-label">Office Phone</label>
                                            <input type="text" name="office_phone" id="phone" class="form-control @error('office_phone') is-invalid @enderror" value="{{$user->office_phone}}">
                                            @error('office_phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="type_of_business" class="form-control-label">Type of Business</label>
                                            <input type="text" name="type_of_business" id="phone" class="form-control @error('type_of_business') is-invalid @enderror" value="{{$user->type_of_business}}">
                                            @error('type_of_business')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="rc_number" class="form-control-label">RC Number</label>
                                            <input type="text" name="rc_number" id="rc_number" class="form-control @error('rc_number') is-invalid @enderror" value="{{$user->rc_number}}">
                                            @error('rc_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </fieldset>
                                    <input type="submit" value="Update Profile" class="btn btn-primary">
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

@endsection