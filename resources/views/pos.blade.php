
@extends('layout.topnavonly')
@section('content')
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content custom-bg">
        <form class="form-horizontal" id="form_id">
            <div class="row">
                <!-- ./col -->
                <!-- ./col -->
                <div class="hidden-lg">&nbsp;</div>
                <div class="col-md-4 col-xs-12 paddless-col">
                    <div class="cell-area">
                        <div class="cell-menu">
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
                        </div>
                        <div class="cell-form">

                            <div class="option-area">
                                <select id="customer_id" style="width: 100%;" name="customer_id" class="form-control select2 custom-selected select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="1">Walk-in Customer</option>
                                    @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="cell-body">
                            <div class="table-scroll">
                                <table class="table-striped sale_cart" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th style="width: 28%;">Menu</th>
                                        <th style="width: 18%;">Price</th>
                                        <th style="width: 20%;">Qty</th>
                                        <th style="width: 25%;">Total</th>
                                        <th style="text-align: center; width: 10%;"><i class="fa fa-trash"></i></th>
                                    </tr>
                                    </thead>

                                    <tbody id="o">
                                    @foreach(Cart::content() as $cartItem)
                                        <tr>
                                            <td>{{ $cartItem->name }}</td>
                                            <td>{{ $cartItem->price }}</td>
                                        <!-- <td>{{ $cartItem->qty }}</td> -->
                                            <td>
                                                <div class="form-group qtyaddminus">
                                                    <div class="input-group">
                                                        <div class="input-group-btn">
                                                            <button id="{{ $cartItem->rowId }}" class="btn btn-default qtydown"><span class="glyphicon glyphicon-minus"></span></button>
                                                        </div>
                                                        <input type="text" readonly id="myNumber" class="form-control input-number" value="{{ $cartItem->qty }}" />
                                                        <div class="input-group-btn">
                                                            <button id="{{ $cartItem->rowId }}" class="btn btn-default qtyup"><span class="glyphicon glyphicon-plus"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>{{ $cartItem->subtotal }}</td>
                                            <td style="text-align: center"><a id="{{ $cartItem->rowId }}" class="btn btn-danger btn-xs toa" ><i style="color:white" class="fa fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <input type="hidden" name="currentStatus" id="currentStatus" value="1">
                            </div>
                            <div class="calculation-area">
                                <p>
                                    <span class="fl-width">Total Items: </span>
                                    <span class="sl-width" id="total_item">{{ Cart::count() }}
                            </span>
                                    <input type="hidden" name="total_items" id="total_item_hidden">
                                    <span class="tl-width">Sub Total:</span>
                                    <span class="fil-width">
                                <input type="text" value="{{ Cart::subtotal() }}" readonly="" name="sub_total" id="sub_total"></span>
                                </p>
                                <p>
                                    <span class="fl-width">Disc Amt/%:</span>
                                    <span class="sl-width">
                                <input type="text" maxlength="6" value="" name="disc" id="disc" class="discount" autocomplete="off" onkeyup="return checkDiscount();" "="">
                                <input type="hidden" name="disc_actual" id="disc_actual">
                            </span>
                                    <span class="tl-width">Total Disc:</span>
                                    <span class="fil-width">
                                <input type="text" value="0.00" readonly="" name="gTotalDisc" id="gTotalDisc">
                            </span>
                                </p>
                                <p>
                                    <span class="fl-width"></span>
                                    <span class="sl-width">

                            </span>
                                    <span class="tl-width">VAT:</span>
                                    <span class="fil-width">
                                <input type="text" value="{{ Cart::tax() }}" readonly="" name="vat" id="vat">
                            </span>
                                </p>
                                <hr class="border-top-pay">
                                <p>
                                    <span class="fl-width">Total Payable:</span>
                                    <span class="sl-width">
                                  </span>
                                    <span class="tl-width"></span>
                                    <span class="fil-width">
                                <input type="text" value="{{ Cart::total() }}" name="total_payable" readonly="" id="total_payable">
                            <input type="hidden" value="0.00" name="total_payableHidden" id="total_payableHidden">
                            </span>
                                </p>
                            </div>
                            <div class="btn-area hidden-lg hidden-sm" style="margin-bottom: 9px">
                                <div class="btn-group-custom">
                                    <button class="btn btn-danger btn-lg custom-btn-one cancel" style="width: 33%">Cancel</button>
                                    <button class="btn btn-danger btn-lg custom-btn-two hold" id="{{ Cart::count() }}" style="width: 32%">Hold</button>
                                    <button class="btn btn-s btn-lg custom-btn-three placeorder" style="width: 32.6%">Place Order</button>
                                </div>
                            </div>
                            <div class="btn-area hidden-xs" style="margin-bottom: 9px">
                                <div class="btn-group-custom">
                                    <button class="btn btn-danger btn-lg custom-btn-one cancel" style="width: 33%">Cancel</button>
                                    <button class="btn btn-danger btn-lg custom-btn-two hold" id="{{ Cart::count() }}" style="width: 32%">Hold</button>
                                    <button class="btn btn-s btn-lg custom-btn-three placeorder" style="width: 32.6%;color:white">Place Order</button>
                                </div>
                            </div>
                            <input type="hidden" value="0" name="hiddenRowCounter" id="hiddenRowCounter">
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-8 col-xs-12 hide-xs-device">

                    <div class="category-area">
                        <div class="category-header">
                            <div class="col-md-12">
                                <div class="category-search">
                                    <select id="table_id" style="width: 100%;" class="form-control select2 table_id select2-hidden-accessible" name="table_id" tabindex="-1" aria-hidden="true">
                                        <option value="">Table</option>
                                        @foreach($tables as $table)
                                            <option value="{{ $table->id }}">{{ $table->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="scrollmenu">
                                <a id="all" class="fm_category allBg main_cat" style="background-color: rgb(0, 37, 62); border-bottom: 6px solid green; border-radius: 7px 7px 0px 0px;" href="">All</a>
                                @foreach($cat as $categ)
                                    <a id="{{ $categ->id }}" class="fm_category main_cat" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">{{ $categ->name }}</a>
                                @endforeach
                            </div>
                            <hr style="margin-top: 2px;margin-bottom: 2px;border: 22;border-top: 1px solid #0a0a0a;">
                            <div class="scrollmenu sub_cat_items">
                                <a id="all" class="fm_category allBg sub_cat" style="background-color: rgb(0, 37, 62); border-bottom: 6px solid green; border-radius: 7px 7px 0px 0px;" href="">All</a>
                                @foreach($subcat as $subcateg)
                                    <a data-id="" id="{{ $subcateg->id }}" class="fm_category sub_cat" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">{{ $subcateg->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="category-body">
                            <div class="category-items">
                                @foreach($prod as $product)

                                    <a style=" background-image: url('{{asset('uploads/productimages/'.$product->image)}}');background-size: 210px 95px;background-repeat: no-repeat;background-position: center;" href="" id="{{ $product->id }}" class="category-single-item {{ $product->slug }} prod">
                                        {{ $product->name }} <span></span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <!-- show tablet -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </form>
    </section>
    <script type="text/javascript">
        $(document).ready(function(){

            /*swal({
                title: 'Quantity updated successfully',
                text: 'You clicked the button!',
                type: 'success',
                timer: 1000,
//                                confirmButtonText: 'Ok'
            });*/
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.placeorder').on('click', function(evt) {
                evt.preventDefault();
                //Save the link in a variable called element
                var element = $(this);
                //Find the id of the link that was clicked
                var id = element.attr("id");
                var table = $('#table_id').val();
                var cust = $('#customer_id').val();

                if (table == '' ) {
                    new PNotify({
                        title: 'Failed',
                        text: 'You have not selected any table',
                        type: 'error',
                        delay: 1000,
                        styling: 'bootstrap3'
                    });
                    return false;
                }

                $.ajax({
                    url: '/cart/placeOrder/',
                    method:"GET",
                    data : {
                        "cust": cust,
                        "table": table,
                    },
                    beforeSend:function(){
                        // $(".mail_view").html('<img src="img/spinner.gif" alt="Wait" />');
                        {{--$("#addbtn{{ $product->id }}").text("Adding to cart");--}}
                    },
                    success:function(data){
//                    $("#cartCount").text(data.cart);
                        console.log('order bana' + data.order_no );
                        new PNotify({
                            title: 'Success',
                            text: data.success,
                            type: 'success',
                            delay: 1000,
                            styling: 'bootstrap3'
                        });
                        $('#o').html(data.thecart);
                        $('#sub_total').val(data.cartsubtot);
                        $('#total_payable').val(data.carttotal);
                        $('#tax').val(data.carttax);
                        $('#total_item').text(data.cartcount);

                        window.open('invoice/'+data.order_no, 'receipt', height=800,width=1000);
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
        });
    </script>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.hold').on('click', function(evt) {
                evt.preventDefault();
                var count = parseInt($('#total_item').text());
                alert('hh');

                /* if the cart is empty, it cannot add to cart */
                if (count === 0){
                    new PNotify({
                        title: 'Failed',
                        text: 'Your cart is empty',
                        type: 'error',
                        delay: 1500,
                        styling: 'bootstrap3'
                    });
                }else {

                    $.ajax({
                        url: '/cart/hold/',
                        method:"GET",
                        data : {
                            "cust": $('#customer_id').val(),
                            "table": $('#table_id').val(),
                        },
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

                }

            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.cancel').on('click', function(evt) {
                evt.preventDefault();

                var count = parseInt($('#total_item').text());

                /* if the cart is empty, it cannot add to cart */
                if (count === 0){
                    new PNotify({
                        title: 'Failed',
                        text: 'Your cart is empty',
                        type: 'error',
                        delay: 1500,
                        styling: 'bootstrap3'
                    });
                }else {

                    $.ajax({
                        url: '/cart/clear/',
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
                            $('#o').html(data.thecart);
                            $('#sub_total').val(data.cartsubtot);
                            $('#total_payable').val(data.carttotal);
                            $('#tax').val(data.carttax);
                            $('#total_item').text(data.cartcount);
                        },
                        error: function (data) {
                            {{--$("#addbtn{{ $product->id }}").text("Add to Cart");--}}
                            alert('Ooops something went wrong!');
                        },
                        complete : function (data){
                        }
                    });

                }

            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.main_cat').on('click', function(evt) {
                evt.preventDefault();
                //Save the link in a variable called element
                var element = $(this);
                //Find the id of the link that was clicked
                var id = element.attr("id");

                $.ajax({
                    url: '/load/subcategoryItems/'+id,
                    method:"GET",
                    data:id,
                    beforeSend:function(){
                        $(".mail_view").html('<img src="img/spinner.gif" alt="Wait" />');
                        {{--$("#addbtn{{ $product->id }}").text("Adding to cart");--}}
                    },
                    success:function(data){
                        console.log('success' + data.success );
                        $('.sub_cat_items').html(data.sub_cat);
                        $('.category-items').html(data.cat_items);
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
            $('.sub_cat').on('click', function(evt) {
                evt.preventDefault();
                //Save the link in a variable called element
                var element = $(this);
                //Find the id of the link that was clicked
                var id = element.attr("id");

                $.ajax({
                    url: '/load/categoryItems/'+id,
                    method:"GET",
                    data:id,
                    beforeSend:function(){
                        $(".mail_view").html('<img src="img/spinner.gif" alt="Wait" />');
                        {{--$("#addbtn{{ $product->id }}").text("Adding to cart");--}}
                    },
                    success:function(data){
                        console.log('success' + data.success );
                        $('.category-items').html(data.cat_items);
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
            $('.prod').on('click', function(evt) {
                evt.preventDefault();
                //Save the link in a variable called element
                var element = $(this);
                //Find the id of the link that was clicked
                var id = element.attr("id");
                var table = $('#table_id').val();

                if (table == '' ) {
                    new PNotify({
                        title: 'Error',
                        text: 'You have not selected any table',
                        type: 'error',
                        delay: 1000,
                        styling: 'bootstrap3'
                    });
                    return false;
                }

                $.ajax({
                    url: '/cart/addItem/'+id,
                    method:"GET",
                    data : {
                        "cust": $('#customer_id').val(),
                        "table": table,
                    },
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
                        $('#o').html(data.thecart);
                        $('#sub_total').val(data.cartsubtot);
                        $('#total_payable').val(data.carttotal);
                        $('#tax').val(data.carttax);
                        $('#total_item').text(data.cartcount);
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
    <script>
        $('.toa').on('click', function(evt) {
            evt.preventDefault();
            //Save the link in a variable called element
            var element = $(this);
            //Find the id of the link that was clicked
            var id = element.attr("id");

            $.ajax({
                url: '/cart/deleteItem/'+id,
                method:"GET",
                data:id,
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
                    $('#o').html(data.thecart);
                    $('#sub_total').val(data.cartsubtot);
                    $('#total_payable').val(data.carttotal);
                    $('#tax').val(data.carttax);
                    $('#total_item').text(data.cartcount);
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
        $('.qtyup').on('click', function(evt) {
            evt.preventDefault();
            //Save the link in a variable called element
            var element = $(this);
            //Find the id of the link that was clicked
            var id = element.attr("id");

            $.ajax({
                url: '/cart/updateQty/'+id,
                method:"GET",
                data:id,
                beforeSend:function(){
                    $(".mail_view").html('<img src="img/spinner.gif" alt="Wait" />');
                    {{--$("#addbtn{{ $product->id }}").text("Adding to cart");--}}
                },
                success:function(data){
                    $('#o').html(data.thecart);
                    $('#sub_total').val(data.cartsubtot);
                    $('#total_payable').val(data.carttotal);
                    $('#tax').val(data.carttax);
                    $('#total_item').text(data.cartcount);
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
        $('.qtydown').on('click', function(evt) {
            evt.preventDefault();
            //Save the link in a variable called element
            var element = $(this);
            //Find the id of the link that was clicked
            var id = element.attr("id");

            $.ajax({
                url: '/cart/updateQtyDown/'+id,
                method:"GET",
                data:id,
                beforeSend:function(){
                    $(".mail_view").html('<img src="img/spinner.gif" alt="Wait" />');
                    {{--$("#addbtn{{ $product->id }}").text("Adding to cart");--}}
                },
                success:function(data){
                    $('#o').html(data.thecart);
                    $('#sub_total').val(data.cartsubtot);
                    $('#total_payable').val(data.carttotal);
                    $('#tax').val(data.carttax);
                    $('#total_item').text(data.cartcount);
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
    <!-- /.content -->
@endsection