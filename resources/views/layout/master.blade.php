<!DOCTYPE html>
<html lang="en">
{{--@include('layout.header')--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <script src="../../bower_components/jquery/dist/jquery.js"></script>
     <script src="../../build/sweetalert/sweetalert.min.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<!-- page content -->
<div class="wrapper">
@include('layout.top_navbar')
@include('layout.side_navbar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include('layout.footer')
</div>
<!-- /page content -->
{{--@include('layout.pagejs')--}}
<script src="{{ asset('js/app.js') }}"> </script>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
{{--<script src="../../dist/js/adminlte.min.js"></script>--}}
<!-- AdminLTE for demo purposes -->

<script src="../../dist/js/demo.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2();

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges   : {
                        'Today'       : [moment(), moment()],
                        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate  : moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        });

        //Colorpicker
        $('.my-colorpicker1').colorpicker();
        //color picker with addon
        $('.my-colorpicker2').colorpicker();

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>

<script type="text/javascript" >
    function renderTime(){

        var currentTime= new Date();
        var diem="AM";
        var h=currentTime.getHours();
        var m=currentTime.getMinutes();
        var s=currentTime.getSeconds();

        if(h==0){
            h=12;
        } else if(h>12){
            h=h-12;
            diem="PM";
        }

        if(h<10){
            h="0" + h;
        }
        if(m<10){
            m="0" + m;
        }
        if(s<10){
            s="0" + s;
        }

        var myClock = document.getElementById('clockDisplay');
        myClock.textContent=h+":"+m+":"+s+""+diem;
        myClock.innerHTML=h+":"+m+":"+s+""+diem;

        setTimeout('renderTime()',1000);
    }
    renderTime();
</script>
</body>
</html>
