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
                        <h3 class="box-title">Edit Category</h3>
                        @include('partials.alerts.flash')
                        @include('partials.errors.error')

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="col-md-6 col-md-offset-3">

                            <form id="" method="POST" action="{{ route('users.update', ['id' => $user->id]) }}" >
                                @csrf
                                @method('PUT')
                                <div class="form-group has-feedback">
                                    <input type="text" name="name" class="form-control" placeholder="Full name" required  value="{{ $user->name, old('name') }}" id="name">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email, old('email') }}" id="email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" name="tel" class="form-control" placeholder="Phone no" value="{{ $user->tel, old('tel') }}" id="tel">
                                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <select class="form-control select2" style="width: 100%;" name="gender">
                                        <option value="{{ $user->gender }}">{{ ($user->gender == 'male'? 'Male' : 'Female') }}</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <select class="form-control select2" style="width: 100%;" name="role">
                                        <option value="{{ $user->role }}">{{ (($user->role==1)?'Admin': (($user->role==2)?'Manager': (($user->role==3)?'Cashier': (($user->role==4)?'Waiter': (($user->role==5)?'Kitchen':'Customer'))))) }}</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Cashier</option>
                                        <option value="4">Waiter</option>
                                        <option value="5">Kitchen</option>

                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
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