@extends('layout.master')
@section('content')
    <!-- Content Header (Page header) -->

    <link href="{{ asset('build/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- PNotify -->
    <link href="{{asset('vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet" type="text/css" media="all" >
    <link href="{{asset('vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet" type="text/css" media="all" >
    <link href="{{asset('vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet" type="text/css" media="all" >
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
                    <!-- /.box-header -->
                    <!-- this is for sound -->
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-left bg-light-blue-gradient">
                            <li class=""><a href="#new_orders" id="new_ords">New Orders <span class="label label-success info" id="info"></span></a></li>
                            <li><a href="#sales_today" id="salestoday">Sales Today <span class="label label-warning warning"></span></a></li>
                        </ul>
                        <ul class="nav nav-tabs pull-right">
                            <li><a id="refresh">    <button ><span class="fa fa-refresh"></span></button>
                                    <span class="label label-danger success"></span></a></li>
                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane" id="new_orders" style="position: relative;padding: 20px !important; "></div>
                            <div class="chart tab-pane" id="sales_today" style="position: relative;padding: 20px !important;"></div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>

    <script src="{{ asset('build/datatable/jquery.dataTables.min.js') }}"> </script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/dist/pnotify.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/dist/pnotify.buttons.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendors/pnotify/dist/pnotify.nonblock.js')}}"></script>


    <script>
        $('#refresh').on('click', function(evt) {
            evt.preventDefault();
            newOrders();

            $.ajax({
                url: '/cashier/badges',
                method:"GET",
                success:function(data){
                    $("#info").html(data.orders);
                }
            });
        });
    </script>
    <script>
        $('#salestoday').on('click', function(evt) {
            evt.preventDefault();

            $.ajax({
                url: '/cashier/sales/',
                method:"GET",
                success:function(data){
                    $('.nav-tabs a[href="#sales_today"]').tab('show');
                    $('#sales_today').html(data.salestoday);
                },
                error: function (data) {
                    alert('Ooops something went wrong!');
                }
            });

            $.ajax({
                url: '/cashier/badges',
                method:"GET",
                success:function(data){
                    $("#info").html(data.orders);
                }
            });
        });
    </script>
    <script>
        newOrders();
        $('#new_ords').on('click', function(evt) {
            evt.preventDefault();
            newOrders();
        });
        function funga() {
            $("#funga").trigger("click");
            newOrders();
        }
        function newOrders()
        {
            $.ajax({
                url: '/cashier/orders/',
                method:"GET",
                beforeSend:function(){
                    $("#new_orders").html('<img src="img/spinner.gif" alt="Wait" />');
                },
                success:function(data){
//                    $("#cartCount").text(data.cart);
//                     console.log('order bana' + data.order_no );
                    $('.nav-tabs a[href="#new_orders"]').tab('show');
                    $('#new_orders').html(data.neworder);
                    // return false;
                },
                error: function (data) {
                    {{--$("#addbtn{{ $product->id }}").text("Add to Cart");--}}
                    alert('Ooops something went wrong!');
                },
                complete : function (data){
                }
            });
        }
    </script>
    <script type="text/javascript">
        $('#new_ord').DataTable({
            select:true
        });
    </script>
    <!-- /.content -->
@endsection