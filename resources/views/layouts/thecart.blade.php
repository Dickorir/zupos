
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