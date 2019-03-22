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
                    <audio id="audio" src="sound/Ticket-machine-sound-effect.mp3" autoplay="false" ></audio>
                    <a id="sauti" onclick="playSound();" class="hidden"> Play</a>

                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-left bg-light-blue-gradient">
                            <li class=""><a href="#new_orders" id="new_ords">New Orders <span class="label label-success info" id="info">{{ $ordersnew }}</span></a></li>
                            <li><a href="#waiting_orders" id="wait_ords">Waiting Orders <span class="label label-warning warning">{{ $orderswait }}</span></a></li>
                            <li><a href="#finished_orders" id="fin_ords">Finished Orders Today <span class="label label-danger success">{{ $ordersfinish }}</span></a></li>
                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane" id="new_orders" style="position: relative;padding: 20px !important; "></div>
                            <div class="chart tab-pane" id="waiting_orders" style="position: relative;padding: 20px !important;"></div>
                            <div class="chart tab-pane" id="finished_orders" style="position: relative;padding: 20px !important;"></div>
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
    </script>
    <script>
        function playSound() {
            var sound = document.getElementById("audio");
            sound.play();
        }
        setInterval(function() {
            var currentinfo = parseInt($('#info').text());
            $.ajax({
                url: '/badges/orders',
                method:"GET",
                success:function(data){
                    var neworder = parseInt(data.ordersnew);
                    if (neworder > currentinfo){
                        $("#sauti").trigger("click");
                        newOrders();
                    }
                    $(".info").html(neworder);
                    $(".warning").html(data.orderswait);
                    $(".success").html(data.ordersfinish);
                }
            });
        }, 5000);
    </script>
    <script>
        $('#new_ords').on('click', function(evt) {
            evt.preventDefault();
            newOrders();
        });
        function newOrders()
        {
            $.ajax({
                url: '/new/orders/',
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
    <script>
        newOrders();
    </script>
    <script>
        $('#fin_ords').on('click', function(evt) {
            evt.preventDefault();

            $.ajax({
                url: '/finished/orders/',
                method:"GET",
                beforeSend:function(){
                    $("#finished_orders").html('<img src="img/spinner.gif" alt="Wait" />');
                },
                success:function(data){
//                    $("#cartCount").text(data.cart);
//                     console.log('order bana' + data.order_no );
                    $('.nav-tabs a[href="#finished_orders"]').tab('show');
                    $('#finished_orders').html(data.finorder);
                    // return false;
                },
                error: function (data) {
                    {{--$("#addbtn{{ $product->id }}").text("Add to Cart");--}}
                    alert('Ooops something went wrong!');
                },
                complete : function (data){
                }
            });

        });
    </script>
    <script>
        $('#wait_ords').on('click', function(evt) {
            evt.preventDefault();

            $.ajax({
                url: '/waiting/orders/',
                method:"GET",
                beforeSend:function(){
                    $("#waiting_orders").html('<img src="img/spinner.gif" alt="Wait" />');
                },
                success:function(data){
//                    $("#cartCount").text(data.cart);
//                     console.log('order bana' + data.order_no );
                    $('.nav-tabs a[href="#waiting_orders"]').tab('show');
                    $('#waiting_orders').html(data.waitorder);
                    // return false;
                },
                error: function (data) {
                    {{--$("#addbtn{{ $product->id }}").text("Add to Cart");--}}
                    alert('Ooops something went wrong!');
                },
                complete : function (data){
                }
            });

        });
    </script>
    <script type="text/javascript">
        $('#new_ord').DataTable({
            select:true
        });
    </script>
    <!-- /.content -->
@endsection