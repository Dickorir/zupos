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
                        <h3 class="box-title">All Products</h3>
                        @include('partials.alerts.flash')
                        @include('partials.errors.error')
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div><br><br>
                        <div class="input-group-btn">
                            <a class="btn btn-primary" href="{{ url('product/create') }}"><i class="fa fa-plus"></i> Product Add</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr class="headings">
                                <th style="width: 1%">No</th>

                                <th style="width: 15%">Product Name</th>
                                <th style="width: 15%">Category</th>
                                <th style="width: 15%">Image</th>

                                <th style="width: 15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $key=>$product)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        {{ $product->category->name }}
                                    </td>
                                    <td>
                                        <img src="uploads/productimages/thumb/{{ $product->image }}" class="thumb-listing-table img-responsive" width="100" height="100"  alt="">
                                    </td>
                                    <td>
                                        <a href="{{  url('product', $product->slug) }}/edit" class="btn btn-info btn-xs btn-flat"><i class="fa fa-pencil"></i> Edit </a>
                                        <a class="btn btn-danger btn-xs btn-flat toa" href="{{ url('/delete_brand',[$product->slug ]) }}" id="{{ $product->slug }}" ><i class="fa fa-trash-o "></i>&nbsp;Delete</a>
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
    <!-- /.content -->
@endsection