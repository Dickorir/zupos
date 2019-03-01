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

                @include('partials.alerts.flash')
                @include('partials.errors.error')
                <div class="box collapsed-box">

                    <div class="box-header">
                        <!-- <h3 class="box-title">New Category</h3> -->

                        <button type="button" class="btn btn-box-tool" data-widget="collapse" style="font-size: 14px;color: green;">New Category</button>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="col-md-6 col-md-offset-3">

                            <form id="" method="POST" action="{{url('/users')}}" >
                                @csrf
                                <div class="form-group has-feedback">
                                    <input type="text" name="name" class="form-control" placeholder="Full name" required  value="{{ old('name') }}" id="name">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" id="email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" name="tel" class="form-control" placeholder="Phone no" value="{{ old('tel') }}" id="tel">
                                    <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <select class="form-control select2" style="width: 100%;" name="gender">
                                        <option selected="selected">Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <select class="form-control select2" style="width: 100%;" name="role">
                                        <option selected="selected">Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Cashier</option>
                                        <option value="4">Waiter</option>
                                        <option value="5">Kitchen</option>

                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="text" name="password" readonly class="form-control" value="1234" placeholder="PIN" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Create</button>
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
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Users</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr class="headings">
                                <th style="width: 1%">No</th>
                                <th style="">Name</th>
                                <th style="">Email</th>
                                <th style="">Phone No</th>
                                <th style="">Gender</th>
                                <th style="">Role</th>
                                <th style="">Status</th>
                                <th style="width: 15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->tel }}
                                    </td>
                                    <td>
                                        {{ $user->gender }}
                                    </td>
                                    <td>
                                        {{ (($user->role==1)?'Admin': (($user->role==2)?'Manager': (($user->role==3)?'Cashier': (($user->role==4)?'Waiter': (($user->role==5)?'Kitchen':'Customer'))))) }}
                                    </td>
                                    <td>
                                        {{ ($user->status == 1) ? "Active" : 'Inactive' }}
                                    </td>
                                    <td>
                                        <a href="{{  url('users', $user->id) }}/edit" class="btn btn-info btn-xs btn-flat"><i class="fa fa-pencil"></i> Edit </a>
                                        @if(($user->status == 2))
                                            <a class="btn btn-success btn-xs btn-flat act" id="{{ $user->id }}" >&nbsp;Activate</a>
                                        @else
                                            <a class="btn btn-danger btn-xs btn-flat deact" id="{{ $user->id }}" >&nbsp;Deactivate</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>

    <script type="text/javascript">
        $(".act").click(function(event){
            event.preventDefault();
            //Save the link in a variable called element
            var element = $(this);
            //Find the id of the link that was clicked
            var id = element.attr("id");

            swal({
                        title: "Are you sure to activate this user?",
                        type: "warning",
                        showCancelButton: true,
                        // confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, Deactivate it!",
                        confirmButtonColor: "#DD6B55",
                        cancelButtonColor: '#d33',
                        closeOnConfirm: false
                    },
                    function() {
                        $.ajax({
                            type: "GET",
                            url: "activate_user/"+id,
                            data: id
                        }).done(function(data){
                            if (data.success){
                                swal({
                                    title: 'Activated!',
                                    text: data.success,
                                    type: 'success',
                                    timer: 4000,
                                    showConfirmButton: true
                                });
                                location.reload();
                            }else if (data.error) {
                                swal({
                                    title: 'Failed',
                                    text: data.error,
                                    type: 'error',
//                      timer: 1000,
                                    confirmButtonText: 'Ok'
                                });
                            }
                        });
                    });

        });
    </script>
    <script type="text/javascript">
        $(".deact").click(function(event){
            event.preventDefault();
            //Save the link in a variable called element
            var element = $(this);
            //Find the id of the link that was clicked
            var id = element.attr("id");

            swal({
                        title: "Are you sure to deactivate this user?",
                        type: "warning",
                        showCancelButton: true,
                        // confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, Deactivate it!",
                        confirmButtonColor: "#DD6B55",
                        cancelButtonColor: '#d33',
                        closeOnConfirm: false
                    },
                    function() {
                        $.ajax({
                            type: "GET",
                            url: "deactivate_user/"+id,
                            data: id
                        }).done(function(data){
                            if (data.success){
                                swal({
                                    title: 'Deactivated!',
                                    text: data.success,
                                    type: 'success',
                                    timer: 4000,
                                    showConfirmButton: true
                                });
                                location.reload();
                            }else if (data.error) {
                                swal({
                                    title: 'Failed',
                                    text: data.error,
                                    type: 'error',
//                      timer: 1000,
                                    confirmButtonText: 'Ok'
                                });
                            }
                        });
                    });

        });
    </script>
    <!-- /.content -->
@endsection