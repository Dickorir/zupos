<link href="{{ asset('build/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{asset('build/css/bootstrap-datepicker3.css')}}" rel="stylesheet">

<form name="reportForm" role="form"  id="reportForm" action="{{url('/report/datesales')}}" method="POST" enctype="multipart/form-data" files=true>
    {{ csrf_field() }}

    <div class="col-md-12">

        <div class="form-group col-md-6 col-sm-5 col-xs-12">
            <div class="input-group">
                <input class="form-control" id="date" autocomplete="off" name="from_date" placeholder="Start" required type="text" value="{{ old('validfrom') }}" >
                <span class="input-group-addon">-</span>
                <input class="form-control" id="date" autocomplete="off" name="to_date" placeholder="End" required type="text" value="{{ old('validto') }}">
            </div>
        </div>
        <div class="form-group col-md-2 col-sm-2 col-xs-12">
            <button type="submit" class="btn btn-success" >Check</button>
        </div>
    </div>
</form>
<div class="col-md-12 text-center">
    @if($from !== '')
        <p><b> Sales from <span id="from">{{ $from }}</span>  to <span id="to">{{ $to }} </span> </b>
        </p>
    @endif
    <button id="excel" class="btn btn-primary pull-right" style="margin-right: 5px; margin-bottom: 20px;"><i class="fa fa-download"></i> Generate Excel</button>
</div>
<div class="col-md-12">
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped" id="sale_ord">
            <thead>
            <tr class="headings">
                <th style="width: 1%">No</th>
                <th style="">Invoice No</th>
                <th style="">Order No</th>
                <th style="">Total Amount</th>
                <th style="">Total Pay</th>
                <th style="">Payment Mode</th>
                <th style="">Cashier</th>
                <th style="">Amount Received</th>
                <th style="">Change</th>
                <th style="">Time</th>
            </tr>
            </thead>
            <tbody>
            @php $tot_amt = 0; @endphp
            @php $tot_pay = 0; @endphp

            @foreach($pays as $key=>$pay)
                <tr>
                    <td>{{++$key}}</td>
                    <td>
                        {{ $pay->invoice_no }}
                    </td>
                    <td>
                        {{ $pay->order_number }}
                    </td>
                    <td>
                        {{  get_option('currency').'. '. number_format($pay->order->total_price, 2) }}
                    </td>
                    <td>
                        {{  get_option('currency').'. '. number_format($pay->total_pay, 2) }}
                    </td>
                    <td>
                        {{ $pay->payment_mode }}
                    </td>
                    <td>
                        {{ $pay->cashier->name }}
                    </td>
                    <td>
                        {{  get_option('currency').'. '. number_format($pay->amount_received, 2) }}
                    </td>
                    <td>
                        {{  get_option('currency').'. '. number_format($pay->change, 2) }}
                    </td>
                    <td>
                        {{ $pay->updated_at }}
                    </td>
                </tr>
                @php $tot_amt+= $pay->order->total_price; @endphp
                @php $tot_pay+= $pay->total_pay; @endphp
            @endforeach
            </tbody>
            <tfoot>
            <tr class="headings">
                <th style="width: 1%"></th>
                <th style=""></th>
                <th style=""></th>
                <th style=""> {{  get_option('currency').'. '. number_format($tot_amt, 2) }}</th>
                <th style=""> {{  get_option('currency').'. '. number_format($tot_pay, 2) }}</th>
                <th style=""></th>
                <th style=""></th>
                <th style=""></th>
                <th style=""></th>
                <th style=""></th>
                <th style=""></th>
            </tr>
            </tfoot>
        </table>

        <div class="modal viewitems fade" id="modal-info">
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>

</div>
<script src="{{ asset('build/datatable/jquery.dataTables.min.js') }}"> </script>
<script type="text/javascript" src="{{asset('build/js/bootstrap-datepicker.min.js')}}"></script>

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
<script>
    $('#salestodaydd').on('click', function(evt) {
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
<script type="text/javascript">
    $('.vieworder').on('click', function(evt) {
        evt.preventDefault();
        var id = $(this).attr('id');

        $.ajax({
            url: '/cashier/view/orderitems/'+id,
            method:"GET",
            beforeSend:function(){

            },
            success:function(data){
                $('.viewitems').html(data.vieworderitems);
                $('#modal-info').modal('show');
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
    $(document).ready(function(){
        var date_input=$('input[name="from_date"]'); //our date input has the name "validfrom"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
//                startDate: new Date(),
            autoclose: true,
            // daysOfWeekDisabled: [0, 6]
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="to_date"]'); //our date input has the name "validto"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
//                startDate: new Date(),
            autoclose: true,
        })
    })
</script>
<script type="text/javascript">
    $('#sale_ord').DataTable({
        select:true
    });
</script>