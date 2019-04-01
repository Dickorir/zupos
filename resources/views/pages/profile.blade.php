@extends('layout.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $title }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">{{ $title }}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Products</h3>
                        @include('partials.alerts.flash')
                        @include('partials.errors.error')

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="{{asset('admin_css/images/img.jpg')}}" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3>{{$user->firstname}} {{$user->lastname}}</h3>

                            <ul class="list-unstyled user_data">
                                <li>Last Login <i class="fa fa-clock user-profile-icon"></i> {{$user->last_login}}
                                </li>

                                <br>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">

                            @include('partials.alerts.flash')
                            @include('partials.errors.error')


                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">User Details</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" id="profile-tab1" role="tab" data-toggle="tab" aria-expanded="false">Edit Profile</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Change Password</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                        <!-- start user projects -->
                                        <table class="table data table-bordered table-striped">

                                            <tbody><tr>
                                                <th>Names</th>
                                                <td>{{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email </th>
                                                <td>{{$user->email}} </td>
                                            </tr>
                                            <tr>
                                                <th>Mobile Number</th>
                                                <td>{{$user->tel}}</td>
                                            </tr>
                                            <tr>
                                                <th>Created At</th>
                                                <td>{{$user->created_at }}</td>
                                            </tr>
                                            <tr>

                                                <th>Status</th>
                                                <td>  @if($user->is_active)
                                                        <a><button type="button" class="btn btn-success btn-xs">Active</button></a>
                                                    @else
                                                        <a><button type="button" class="btn btn-danger btn-xs">Blocked</button></a>
                                                    @endif</td>
                                            </tr>
                                            </tbody></table>
                                        <!-- end user projects -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                        <form id="" method="POST" action="{{url('/profile-edit')}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  accept-charset="UTF-8" novalidate files=true>
                                            {{ csrf_field() }}
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Name <span class="required">*</span></label>
                                                    <input id="name" class="form-control col-md-7 col-xs-12" value="{{ $user->name }}" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Name " required="required" type="text">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Phone Number <span class="required">*</span></label>
                                                    <input id="tel" class="form-control col-md-7 col-xs-12" value="{{ $user->tel }}" data-validate-length-range="6" data-validate-words="2" name="tel" placeholder="Admin Number " required="required" type="number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Email Address <span class="required">*</span>
                                                    </label>
                                                    <input class="form-control col-md-7 col-xs-12" type="email" name="email" id="email" value="{{ $user->email }}" required="required"  placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <form id="register" method="POST" action="{{url('/change-password')}}">
                                            {{ csrf_field()}}
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="InputOldPassword">Old Password</label>
                                                    <input type="Password" name="old_password" class="form-control" id="InputOldPassword" placeholder="Enter Old Password">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="InputNewPassword">New Password</label>
                                                    <input type="Password" class="form-control" name="new_password" id="InputNewPassword" placeholder="Enter New Password">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="InputNewPassword2">Confirm Password</label>
                                                    <input type="Password" class="form-control" name="new_password_confirmation" id="InputNewPassword2" placeholder="Enter New Password">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection