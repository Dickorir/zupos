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
                        <h3 class="box-title">All product variants</h3>
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
                            <a class="btn btn-primary" href="{{ route('product_variant.create') }}"><i class="fa fa-plus"></i> Add</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr class="headings">
                                <th style="width: 1%">No</th>

                                <th style="width: 15%">Product Variant Name</th>

                                <th style="width: 15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prod_var as $key=>$prod_vars)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        {{ $prod_vars->name }}
                                    </td>
                                    <td>
                                        <a href="{{  url('product_variant', $prod_vars->slug) }}/edit" class="btn btn-info btn-xs btn-flat"><i class="fa fa-pencil"></i> Edit </a>
                                        <a class="btn btn-danger btn-xs btn-flat toa" href="{{ url('product_variant',[$prod_vars->id ]) }}" id="{{ $prod_vars->id }}" ><i class="fa fa-trash-o "></i>&nbsp;Delete</a>
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
        $(function() {
            $(".toa").click(function(event){
                event.preventDefault();
                //Save the link in a variable called element
                var element = $(this);
                //Find the id of the link that was clicked
                var id = element.attr("id");

                swal({
                            title: "Are you sure to delete this Variant Product?",
                            text: "You will not be able to recover this data!",
                            type: "warning",
                            showCancelButton: true,
                            // confirmButtonClass: "btn-danger",
                            confirmButtonText: "Yes, delete it!",
                            confirmButtonColor: "#DD6B55",
                            cancelButtonColor: '#d33',
                            closeOnConfirm: false
                        },
                        function() {
                            $.ajax({
                                type: 'DELETE',
                                url: "product_variant/"+id,
                                dataType: 'json',
                                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                                data: {id:id,"_token": "{{ csrf_token() }}"}
                            }).done(function(data){
                                if (data.success){
                                    swal({
                                        title: 'Deleted!',
                                        text: data.success,
                                        type: 'success',
                                        timer: 4000,
                                        showConfirmButton: true
                                    });
                                    element.parent().parent().fadeOut('slow', function() {$(this).remove();});
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
        });
    </script>
    <!-- /.content -->
@endsection