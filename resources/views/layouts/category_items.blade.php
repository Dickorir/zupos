
@foreach($prod as $product)

    <a style=" background-image: url('{{asset('uploads/productimages/'.$product->image)}}');background-size: 210px 95px;background-repeat: no-repeat;background-position: center;" href="" id="{{ $product->id }}" class="category-single-item {{ $product->slug }} prod">
        {{ $product->name }} <span></span></a>
@endforeach

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
                    title: 'Success',
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