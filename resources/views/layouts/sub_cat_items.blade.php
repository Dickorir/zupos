
<a id="all" class="fm_category allBg sub_cat" style="background-color: rgb(0, 37, 62); border-bottom: 6px solid green; border-radius: 7px 7px 0px 0px;" href="">All</a>
@foreach($subcat as $subcateg)
    <a data-id="" id="{{ $subcateg->id }}" class="fm_category sub_cat" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">{{ $subcateg->name }}</a>
@endforeach

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