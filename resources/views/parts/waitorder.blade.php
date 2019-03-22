<link href="{{ asset('build/datatable/jquery.dataTables.min.css') }}" rel="stylesheet">

<div class="box-body table-responsive no-padding">
    <table class="table table-hover table-striped" id="wait_ord">
        <thead>
        <tr class="headings">
            <th style="width: 1%">No</th>
            <th style="">Order No</th>
            <th style="">Waiter</th>
            <th style="">Table</th>
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
                    {{ $order->updated_at }}
                </td>
                <td>
                    <a href="" class="btn btn-info btn-xs btn-flat vieworderwait" id="{{ $order->id }}"><i class="fa fa-edit"></i> View </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="modal viewitemswait fade" id="modal-wait">
        <!-- /.modal-dialog -->
    </div>
</div>
<script src="{{ asset('build/datatable/jquery.dataTables.min.js') }}"> </script>

<script type="text/javascript">
    $('.vieworderwait').on('click', function(evt) {
        evt.preventDefault();
        var id = $(this).attr('id');

        $.ajax({
            url: '/view/orderitems/'+id,
            method:"GET",
            beforeSend:function(){

            },
            success:function(data){
                $('.viewitemswait').html(data.vieworderitems);
                $('#modal-wait').modal('show');
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
    $('#wait_ord').DataTable({
        select:true
    });
</script>