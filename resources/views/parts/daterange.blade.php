
<link href="{{asset('build/css/bootstrap-datepicker3.css')}}" rel="stylesheet">
<form name="reportForm" role="form"  id="reportForm" action="{{url('/report/datesales')}}" method="POST" enctype="multipart/form-data" files=true>
    {{ csrf_field() }}

    <div class="col-md-12">

        <div class="form-group col-md-6 col-sm-5 col-xs-12">
            <div class="input-group">
                <input class="form-control" id="date" autocomplete="off" name="from_date" placeholder="Start" required type="text" value="{{ old('validfrom') }}" >
                <span class="input-group-addon">-</span>
                <input class="form-control" id="date" autocomplete="off" name="to_date" placeholder="End" required type="text" value="{{ old('validto') }}">
            </div>
        </div>
        <div class="form-group col-md-2 col-sm-2 col-xs-12">
            <button type="submit" class="btn btn-success" >Check</button>
        </div>
    </div>
</form>

<script type="text/javascript" src="{{asset('build/js/bootstrap-datepicker.min.js')}}"></script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="from_date"]'); //our date input has the name "validfrom"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
//                startDate: new Date(),
            autoclose: true,
            // daysOfWeekDisabled: [0, 6]
        })
    })
</script>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="to_date"]'); //our date input has the name "validto"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
//                startDate: new Date(),
            autoclose: true,
        })
    })
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#reportForm').on("submit", function(event){
            event.preventDefault();

            var action = $(this).attr('action');
            alert('mimi');
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