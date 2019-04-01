
<div class="box-body no-padding">
    <div class="col-md-6">
        <input type="text" id="pay_id" value="{{ $pay->id }}">
        <button class="btn btn-flat btn-warning pull-right" id="print" style="font-size:25px;"><i class="fa fa-print"></i> PRINT RECEIPT</button>
    </div>
    <div class="col-md-6">
        <button class="btn btn-flat btn-info pull-right" id="funga" data-dismiss="modal" style="font-size:25px;"><i class="fa fa-thumbs-up"></i> CONTINUE</button>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#print').on('click', function(evt) {
            evt.preventDefault();
            var pay_id = $("#pay_id").val();

            window.open('receipt/'+pay_id, 'window name', 'window settings');
        });
    });
</script>
<script>
    $('#cont').on('click', function() {
        newOrders();
        funga();
    });
</script>