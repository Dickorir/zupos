
<ul class="addButton">
    <li><a style="background-color: rgb(35, 82, 124);color: white;cursor: pointer" class="suspendIDCurrent" data-suspendid="0" id="sus_0">Current</a></li>
    <li style="margin-left: 9px;" id="btRow_1">
        @if(!$hold->isEmpty())<a style="cursor: pointer; background-color: rgb(35, 82, 124); color: white;" class="suspendID" data-suspendid="1" id="sus_1" data-toggle="modal" data-target="#modal-info">Hold </a><span><i class="fa fa-minus deleteSuspendID" data-minussuspendid="1"></i></span>

        <div class="modal modal-info fade" id="modal-info">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Orders Hold</h4>
                    </div>
                    <div class="modal-body">

                        <div class="table-scroll">
                            <table class="table-bordered" style="width: 100%;background-color: #717171;">
                                <thead>
                                <tr>
                                    <th style="width: 28%;">Hold ID</th>
                                    <th style="width: 18%;">Table</th>
                                    <th style="width: 20%;">Waiter</th>
                                    <th style="width: 25%;">Customer</th>
                                    <th style="text-align: center; width: 10%;">Restore</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($hold as $holds)
                                    @php $customer = \App\User::where("id","$holds->customer_id")->select('name')->first() @endphp
                                    @php $table = \App\Table::where("id","$holds->table_no")->select('name')->first() @endphp
                                    <tr>
                                        <td>{{ $holds->hold_id }}</td>
                                        <td>{{ ($table == null)? 'none' : $table->name }}</td>
                                        <td>{{ $holds->user->name }}</td>
                                        <td>{{ ($customer == null)? 'none' : $customer->name }}</td>
                                        <td style="text-align: center"><a id="{{ $holds->hold_id }}" class="restore" ><i style="color:green" class="fa fa-window-restore"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <input type="hidden" name="currentStatus" id="currentStatus" value="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        @endif
    </li>
</ul>

<script type="text/javascript">
    $(document).ready(function(){
        $('.restore').on('click', function(evt) {
            evt.preventDefault();
            var id = $(this).attr('id');

            $('#modal-info').modal('hide');
            $.ajax({
                url: '/cart/hold/restore/'+id,
                method:"GET",
                beforeSend:function(){
                    $(".mail_view").html('<img src="img/spinner.gif" alt="Wait" />');
                    {{--$("#addbtn{{ $product->id }}").text("Adding to cart");--}}
                },
                success:function(data){
//                    $("#cartCount").text(data.cart);
                    console.log('success' + data.success );
                    new PNotify({
                        title: 'Success',
                        text: data.success,
                        type: 'success',
                        delay: 1000,
                        styling: 'bootstrap3'
                    });
                    $('#modal-info').modal('hide');
                    $('#o').html(data.thecart);
                    $('#sub_total').val(data.cartsubtot);
                    $('#total_payable').val(data.carttotal);
                    $('#tax').val(data.carttax);
                    $('#total_item').text(data.cartcount);
                    $('.cell-menu').html(data.holds);
                },
                error: function (data) {
                    {{--$("#addbtn{{ $product->id }}").text("Add to Cart");--}}
                    alert('Ooops something went wrong!');
                },
                complete : function (data){
                }
            });

        });
    });
</script>