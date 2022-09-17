@extends('layouts.dashboard')

@section('dashboard-content')
<div class="dashboard-tlbar d-block mb-5">
    <div class="row">
        <div class="colxl-12 col-lg-12 col-md-12">
            <h1 class="ft-medium">My Profile #{{ $user->identifier}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#" class="theme-cl">My Profile</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="dashboard-widg-bar d-block">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="_dashboard_content bg-white rounded mb-4">
                <div class="_dashboard_content_header br-bottom py-3 px-3">
                    <div class="_dashboard__header_flex">
                        <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>My Account</h4>	
                    </div>
                </div>
                
                <div class="_dashboard_content_body py-3 px-3">
                    <form class="row" method="post" action="#">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="custom-file avater_uploads">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
                            </div>
                        </div>
                        
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">First Name</label>
                                        <input type="text" class="form-control rounded" value="{{ $user->first_name}}" placeholder="First Name">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Last Name</label>
                                        <input type="text" class="form-control rounded" value="{{ $user->first_name}}">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Phone</label>
                                        <input type="text" class="form-control rounded" value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Email</label>
                                        <input type="email" class="form-control rounded" value="{{ $user->phone }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Vendor Type</label>
                                        <select name="vendor_type" class="custom-select rounded">
                                            <option>Choose Job Type</option>
                                            <option>Driver</option>
                                            <option>Part Time</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label class="text-dark ft-medium">Full Address</label>
                                        <input type="text" class="form-control rounded" value="{{ $user->address }}" placeholder="#10 Marke Juger, SBI Road">
                                    </div>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
