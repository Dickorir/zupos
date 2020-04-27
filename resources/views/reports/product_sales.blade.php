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
                        <h3 class="box-title">Product Sales</h3>
                        <div class="box-tools">

                        </div><br>
                        <div id="daterange" class="text-center">

                        </div>

                        <div class="col-md-12 text-center">
                            <p><b> Product Sales from <span id="from">{{ $from }}</span>  to <span id="to">{{ $to }} </span> </b></p>
                            <button id="excel" class="btn btn-primary pull-right" style="margin-right: 5px; margin-bottom: 20px;"><i class="fa fa-download"></i> Generate Excel</button>
                        </div>
                        <script>
                            $(document).ready(function(){
                                var newaction = '{{url('/report/productdatesales')}}';
                                $.ajax({
                                    url: '/load/daterange/',
                                    method:"GET",
                                    success:function(data){
                                        $('#daterange').html(data.daterange);
                                        $('#reportForm').attr('action',newaction )
                                    },
                                    error: function (data) {
                                        alert('Ooops something went wrong!');
                                    }
                                });
                            });
                        </script>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding" id="sales_today">
                        <table class="table table-hover table-striped" id="sale_ord">
                            <thead>
                            <tr class="headings">
                                <th style="width: 1%">No</th>
                                <th style="">Name</th>
                                <th style="">Price</th>
                                <th style="">Total Quantity</th>
                                <th style="">Total Sales</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $qty = 0 @endphp
                            @php $sum = 0 @endphp
                            @foreach($prods as $key=>$prod)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>
                                        {{ $prod->name }}
                                    </td>
                                    <td>
                                        {{ $prod->price }}
                                    </td>
                                    <td>
                                        {{ $prod->tqty }}
                                    </td>
                                    <td>
                                        {{ get_option('currency').'. '. number_format($prod->tsales, 2) }}
                                    </td>
                                </tr>
                                @php $qty+=$prod->tqty @endphp
                                @php $sum+=$prod->tsales @endphp
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th style="width: 1%"></th>
                                <th style=""></th>
                                <th style=""></th>
                                <th style="">{{ $qty }}</th>
                                <th style="">{{ get_option('currency').'. '. number_format($sum, 2) }}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>
    <!-- /.content -->

    <script type="text/javascript">
        $(document).ready(function(){
            $('#excel').on("click", function(event){
                event.preventDefault();

                var csv = 'csv';
                var from = $('#from').text();
                var to = $('#to').text();

                window.open('/downloadExcel/'+csv+'/'+from+'/'+to,"Child", "width=500, height=300").focus();

                alert('Excel generated successfully go to download folder');
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#reportForm').on("submit", function(event){
                event.preventDefault();

                var action = $(this).attr('action');
                alert('mimi');
                jQuery.support.cors = true;
                $.ajax({
                    url: action,
                    method:"POST",
                    data:$('#reportForm').serialize(),
                    beforeSend:function(){
                        // $("#addbtn").text("Adding to cart");
                    },
                    success:function(data){
                        $('.nav-tabs a[href="#sales_today"]').tab('show');
                        $('#sales_today').html(data.salestoday);
                    },
                    error: function (data) {
                        alert('Ooops something went wrong!');
                    },
                    complete : function (data){
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $('#sale_ord').DataTable({
            select:true
        });
    </script>
@endsection