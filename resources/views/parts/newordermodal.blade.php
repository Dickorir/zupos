
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-blue">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Order #{{ $order->order_number }}</h4>
        </div>
        <div class="modal-body bg-gray">

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover table-striped table-bordered" id="new_ord">
                    <thead>
                    <tr class="headings">
                        <th style="width: 1%">No</th>
                        <th style="">Name</th>
                        <th style="">quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orderitems as $key=>$orderitem)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>
                                {{ $orderitem->product->name }}
                            </td>
                            <td>
                                {{ $orderitem->quantity }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- /.modal -->
            </div>
        </div>
        <div class="modal-footer bg-blue-gradient">
            <button type="button" id="funga" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            @if($order->kitchen == 0)
                <button type="button" class="btn btn-outline pull-right fin" data-id="0" id="{{ $order->id }}">Finish</button>
                <button type="button" class="btn btn-outline pull-right pre" id="{{ $order->id }}">Prepare</button>
            @elseif($order->kitchen == 1)
                <button type="button" class="btn btn-outline pull-right fin" data-id="1" id="{{ $order->id }}">Finish</button>
            @endif
        </div>
    </div>
    <!-- /.modal-content -->
    <script>
        $('.pre').on('click', function(evt) {
            evt.preventDefault();
            var element = $(this);
            var id = element.attr('id');

            $.ajax({
                url: '/prepare/order/'+id,
                method:"GET",
                beforeSend:function(){
                    // $("#new_orders").html('<img src="img/spinner.gif" alt="Wait" />');
                },
                success:function(data){
                    new PNotify({
                        title: 'Success',
                        text: data.success,
                        type: 'success',
                        delay: 2000,
                        styling: 'bootstrap3'
                    });
                    $('#modal-info').modal('hide');
                },
                error: function (data) {
                    {{--$("#addbtn{{ $product->id }}").text("Add to Cart");--}}
                    alert('Ooops something went wrong!');
                },
                complete : function (data){
                    $.ajax({
                        url: '/new/orders/',
                        method:"GET",
                        success:function(data){
                            $('.nav-tabs a[href="#new_orders"]').tab('show');
                            $('#new_orders').html(data.neworder);
                        }
                    });

                    $.ajax({
                        url: '/badges/orders',
                        method:"GET",
                        success:function(data){
                            var neworder = parseInt(data.ordersnew);
                            $(".info").html(neworder);
                            $(".warning").html(data.orderswait);
                            $(".success").html(data.ordersfinish);
                        }
                    });
                }
            });

        });
    </script>
    <script>
        $('.fin').on('click', function(evt) {
            evt.preventDefault();
            var element = $(this);
            var id = element.attr('id');
            var data_id = element.attr('data-id');

            $.ajax({
                url: '/fin/order/'+id,
                method:"GET",
                beforeSend:function(){
                    // $("#new_orders").html('<img src="img/spinner.gif" alt="Wait" />');
                },
                success:function(data){
                    new PNotify({
                        title: 'Success',
                        text: data.success,
                        type: 'success',
                        delay: 2000,
                        styling: 'bootstrap3'
                    });
                    $("#funga").trigger("click");
                },
                error: function (data) {
                    {{--$("#addbtn{{ $product->id }}").text("Add to Cart");--}}
                    alert('Ooops something went wrong!');
                },
                complete : function (data){
                    if (data_id == 0) {
                        $.ajax({
                            url: '/new/orders/',
                            method:"GET",
                            success:function(data){
                                $('.nav-tabs a[href="#new_orders"]').tab('show');
                                $('#new_orders').html(data.neworder);
                            }
                        });
                    }else {
                        $.ajax({
                            url: '/waiting/orders/',
                            method:"GET",
                            success:function(data){
                                $('.nav-tabs a[href="#waiting_orders"]').tab('show');
                                $('#waiting_orders').html(data.waitorder);
                            }
                        });
                    }

                    $.ajax({
                        url: '/badges/orders',
                        method:"GET",
                        success:function(data){
                            var neworder = parseInt(data.ordersnew);
                            $(".info").html(neworder);
                            $(".warning").html(data.orderswait);
                            $(".success").html(data.ordersfinish);
                        }
                    });
                }
            });

        });
    </script>
</div>
<!-- /.modal-dialog -->
<!-- /.modal -->