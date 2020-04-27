<link href="{{ asset('build/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{asset('build/css/bootstrap-datepicker3.css')}}" rel="stylesheet">

<div class="col-md-12 text-center">
        <p><b> Product Sales from <span id="from">{{ $from }}</span>  to <span id="to">{{ $to }} </span> </b></p>
</div>
<div class="col-md-12">
    <div class="box-body table-responsive no-padding">
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
<script type="text/javascript">
    $('#sale_ord').DataTable({
        select:true
    });
</script>