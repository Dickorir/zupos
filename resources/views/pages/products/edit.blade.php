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
                        <form id="" method="POST" action="{{ route('product.update', ['id' => $product->id]) }}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  accept-charset="UTF-8" novalidate files=true>
                            @csrf
                            @method('PUT')
                            <div class="col-md-6 col-md-offset-1">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" name="name" id="name" value="{{ $product->name }}" required="required" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Product Category</label>
                                        <select class="form-control select2" name="category" style="width: 100%;">
                                            <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                                            @if($categories->count() > 0)
                                                @foreach($categories as $category)
                                                    <option value= "{{ $category->id }} "{{ old('brand') == $category->id ? 'selected':'' }}>{{ $category->name }} </option>

                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <textarea name="description" class="form-control" rows="3" placeholder="optional">{{  $product->description }}</textarea>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <br><br><br><br>
                                <div class="form-group">
                                    <img id="front" src="{{ asset('uploads/productimages/thumb/'.$product->image ) }}" alt="brand image" class="img-responsive" width="200" height="200" src="blob:"><br>
                                    <input type="file" value="" name="image" onchange="document.getElementById('front').src = window.URL.createObjectURL(this.files[0])">
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