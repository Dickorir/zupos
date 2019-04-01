<link href="{{ asset('build/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">

<div class="box-body table-responsive no-padding">
    <table class="table table-hover table-striped" id="new_ord">
        <thead>
        <tr class="headings">
            <th style="width: 1%">No</th>
            <th style="">Order No</th>
            <th style="">Waiter</th>
            <th style="">Table</th>
            <th style="">Amount</th>
            <th style="">Time</th>
            <th style="width: 15%">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $key=>$order)
            <tr>
                <td>{{++$key}}</td>
                <td>
                    {{ $order->order_number }}
                </td>
                <td>
                    {{ $order->waiter->name }}
                </td>
                <td>
                    {{ $order->table->name }}
                </td>
                <td>
                   {{ get_option('currency').'. '. number_format($order->balance, 2) }}
                </td>
                <td>
                    {{ $order->updated_at }}
                </td>
                <td>
                    <a href="" class="btn btn-success btn-xs btn-flat vieworder" id="{{ $order->id }}"><i class="fa fa-money"></i> Pay </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="modal viewitems fade" id="modal-info">
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>
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
<script src="{{ asset('build/datatable/jquery.dataTables.min.js') }}"> </script>

<script type="text/javascript">
    $('#new_ord').DataTable({
        select:true
    });
</script>