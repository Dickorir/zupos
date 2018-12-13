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
                            <h3 class="box-title">New Category</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="col-md-6 col-md-offset-3">
                                <form id="" method="POST" action="{{url('category')}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  accept-charset="UTF-8" novalidate files=true>
                                    @csrf
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="text" name="name" id="name" value="{{ old('name') }}" required="required" class="form-control" placeholder="Enter Category name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Description</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="optional">{{ old('description') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <img id="front" alt="side image" class="img-responsive" width="200" height="200" src="blob:">
                                                <input type="file" value="" name="image" onchange="document.getElementById('front').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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