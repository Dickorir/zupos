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
                        <h3 class="box-title">New Product</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <form id="" method="POST" action="{{route('product.store')}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  accept-charset="UTF-8" novalidate files=true>
                            @csrf
                            <div class="col-md-6 col-md-offset-1">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" required="required" class="form-control" placeholder="Enter Category name">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Product Category</label>
                                        <select class="form-control select2" name="category" style="width: 100%; border-radius: 0px!important;height: 34px!important;">
                                            <option selected="selected">Select Category </option>
                                            @if($categories->count() > 0)
                                                @foreach($categories as $category)
                                                    <option value= "{{ $category->id }} "{{ old('brand') == $category->id ? 'selected':'' }}>{{ $category->name }} </option>

                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <textarea name="description" class="form-control" rows="3" placeholder="optional">{{ old('description') }}</textarea>
                                    </div>
                                </div>
                                <!-- <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div> -->

                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <br><br><br><br>
                                <div class="form-group">
                                    <img id="front" alt="product image" class="img-responsive" width="200" height="200" src="blob:">
                                    <input type="file" value="" name="image" onchange="document.getElementById('front').src = window.URL.createObjectURL(this.files[0])">
                                </div>

                            </div>
                            <div class="col-md-11 col-md-offset-1">
                                <div class="row">
                                    <div class="box-body">
                                        <div class="form-group col-md-4">
                                            <label for="name">Title</label>
                                            <input type="text" name="title" id="title" value="{{ old('title') }}" required="required" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="form-groupp col-md-2">
                                            <label for="name">Price</label>
                                            <input type="text" name="price" id="price" value="{{ old('price') }}" required="required" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="form-groupp col-md-2">
                                            <label for="name">Quantity</label>
                                            <input type="text" name="quantity" id="quantity" value="{{ old('quantity') }}" required="required" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="name">Re-Order-Level</label>
                                            <input type="text" name="re_order_level" id="re_order_level" value="{{ old('re_order_level') }}" required="required" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection