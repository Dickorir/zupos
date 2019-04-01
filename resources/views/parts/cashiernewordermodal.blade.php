
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header bg-blue">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modal">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Order #{{ $order->order_number }}</h4>
            <input type="hidden" value="{{ $order->order_number }}" id="order_num">
        </div>
        <div class="modal-body bg-gray" id="payments">

            <div class="box-body table-responsive no-padding">
                <table class="table table-hover table-striped table-bordered" id="new_ord">
                    <thead>
                    <tr class="headings">
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Price({{ get_option('currency') }})</th>
                        <th style="text-align: center">Qty</th>
                        <th style="text-align: center">Total({{ get_option('currency') }})</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $sum = 0 @endphp
                    @foreach($orderitems as $key=>$orderitem)
                        <tr>
                            <td>
                                {{ $orderitem->product->name }}
                            </td>
                            <td style="text-align: right">
                                {{ number_format($orderitem->price, 2) }}
                            </td>
                            <td style="text-align: center">
                                {{ $orderitem->quantity }}
                            </td>
                            <td style="text-align: right">
                                {{ number_format($orderitem->sub_total_price, 2) }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr class="headings">
                        <th colspan="3" style="text-align: right;padding-top: 1px; padding-bottom: 1px;">Payable Amount</th>
                        <th style="text-align: right;padding-top: 1px; padding-bottom: 1px;">{{ get_option('currency') }}. <input disabled type="text" value="{{ number_format($order->balance, 2) }}" id="payable_amount" style="width: 60px;text-align: right;"></th>
                    </tr>
                    <tr class="headings">
                        <th colspan="3" style="text-align: right;padding-top: 1px; padding-bottom: 1px;">Amount Received</th>
                        <th style="text-align: right;padding-top: 1px; padding-bottom: 1px;">{{ get_option('currency') }}. <input autocomplete="off" type="text" value="" id="amount_received" style="width: 60px;text-align: right;"></th>
                    </tr>
                    <tr class="headings">
                        <th colspan="3" style="text-align: right;padding-top: 1px; padding-bottom: 1px;">Due Change</th>
                        <th style="text-align: right;padding-top: 1px; padding-bottom: 1px;">{{ get_option('currency') }}. <input disabled type="text" value="" id="due_change" style="width: 60px;text-align: right;"></th>
                    </tr>
                    <tr class="headings">
                        <th colspan="3" style="text-align: right;padding-top: 1px; padding-bottom: 1px;">Payment Mode</th>
                        <th style="text-align: right;padding-top: 1px; padding-bottom: 1px;"> <input type="text" value="cash" id="payment_mode" style="width: 80px;text-align: center;"></th>
                    </tr>
                    </tfoot>
                </table>
                <div class="headings">
                    <button class="btn btn-flat btn-success pull-right" id="pay" style="font-size:25px;"><i class="fa fa-money"></i> PAY NOW</button>
                </div>

                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#pay').on('click', function(evt) {
                            evt.preventDefault();
                            var amt_rec = parseInt($("#amount_received").val());
                            var pay_amt = parseInt($("#payable_amount").val());
                            var ord_num = $("#order_num").val();
                            var due_change = $("#due_change").val();

                            var amt_paid = 0;
                            if (amt_rec > pay_amt){
                                amt_paid = pay_amt;
                            } else if (amt_rec < pay_amt){
                                amt_paid = amt_rec;
                            }else if (amt_rec === pay_amt) {
                                amt_paid = pay_amt;
                            }

                            /* to check if a value is entered into the input box */
                            if (amt_paid === 0){
                                new PNotify({
                                    title: 'Error',
                                    text: 'Please enter some amount',
                                    type: 'error',
                                    delay: 1000,
                                    styling: 'bootstrap3'
                                });
                                return false;
                            }

                            $.ajax({
                                url: '/cashier/pay/'+ord_num,
                                method:"GET",
                                data : {
                                    "amt_paid": amt_paid,
                                    "amt_received": amt_rec,
                                    "due_change": due_change,
                                },
                                beforeSend:function(){

                                },
                                success:function(data){
                                    new PNotify({
                                        title: 'Success',
                                        text: data.success,
                                        type: 'success',
                                        delay: 1000,
                                        styling: 'bootstrap3'
                                    });
                                    $('#payments').html(data.printreceipt);
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
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#amount_received').on('change keyup', function(evt) {
                            evt.preventDefault();
                            //Save the link in a variable called element
                            var amt_rec = $(this).val();
                            var pay_amt = $("#payable_amount").val();
                            var chang = amt_rec - pay_amt;
                            var change = (chang < 0)? 0 : chang ;
                            var due_cng = $("#due_change").val(change);

                        });
                    });
                </script>
            </div>
        </div>
        <div class="modal-footer bg-blue-gradient">
            <button type="button" id="funga" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
<!-- /.modal -->